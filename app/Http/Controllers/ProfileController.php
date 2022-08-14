<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Classification;
use App\Models\Country;
use App\Models\Review;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use PharIo\Manifest\Author;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    /**
     * Create a new OrderController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Display a listing of the resource.
     * @param \Illuminate\Http\Request $request
     * @param string $status
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('profile.index')->with(['articles' => auth()->user()->articles()->get()]);
    }

    /**
     * Show om form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('profile.add')->with(['classifications' => Classification::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        //dd($request->articleFile->getClientMimeType());
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'abstract' => ['required', 'string'],
            'type' => ['required', 'string', 'max:255'],
            'classification' => ['required', 'integer', Rule::in(Classification::all()->pluck('id')->toArray())],
            'language' => ['required', 'string', 'max:255'],
            'keywords' => ['required', 'string', 'max:255'],
            'authors' => ['required', 'array', 'min:1'],
            'authors.*' => ['required', 'string', 'distinct', 'min:3'],
            'articleFile' => ['required', 'mimetypes:application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'max:5120'],
        ];

        $messages = [
            'required' => 'The :attribute field is required.',
            'integer' => 'The :attribute field should be integer.',
            'string' => 'The :attribute field should be string.',
            'gt:0' => 'The :attribute field should be positive.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        DB::transaction(function () use ($request) {
            $fileName = 'article_' . time() . '.' . $request->articleFile->extension();

            $request->articleFile->storeAs('uploads', $fileName);

            $article = Article::create([
                'title' => $request->title,
                'abstract' => $request->abstract,
                'views_count' => 0,
                'type' => $request->type,
                'classification_id' => $request->classification,
                'language' => $request->language,
                'status' => 'New',
                'keywords' => $request->keywords,
                'link' => $fileName,
                'submitter' => auth()->user()->id
            ]);

            foreach ($request->authors as $key => $author) {
                if (strtolower($author) === strtolower(auth()->user()->name)) {
                    auth()->user()->articles()->save($article);
                } else {
                    $newUser = User::create([
                        'name' => $author
                    ]);

                    $newUser->assignRole(Role::whereName('author')->first());

                    $newUser->articles()->save($article);
                }
            }
        });

        return redirect()->route('profile.index');
    }

    public function show($id)
    {
        $article = Article::find($id);

        if (Auth::check() && Auth::user()->getRoleNames()[0] !== 'admin') {
            if ($article->status !== 'Accepted' && $article->submitter !== auth()->user()->id) {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('home');
        }


        if (!$article) {
            return redirect()->route('home')->withErrors(['msg' => 'File not found.']);
        }

        $article->avgRate = 0;

        $sum = 0;
        if (count($article->reviews) > 0) {
            foreach ($article->reviews as $rev) {
                $sum += $rev->rate;
            }

            $article->avgRate = ceil($sum / count($article->reviews));
        }

        $resData = ['article' => $article];

        if (Auth::user()) {
            $revs = Review::where('user_id', auth()->user()->id)->where('article_id', $id)->get();
            if (count($revs) > 0 || in_array(Auth::user()->id, $article->authors()->get()->pluck('id')->toArray())) {
                $resData += ['hasReview' => 'yes'];
            }
        }

        return view('profile.show')->with($resData);
    }

    public function downloadFile($id)
    {
        switch ($id) {
            case 'guidelines':
                $pathToFile = storage_path('app/public/uploads/JVS20guidlines.docx');
                break;
            default:
                $article = Article::find($id);
                $pathToFile = storage_path('app/public/uploads/' . $article->link);
                break;
        }


        if (file_exists($pathToFile)) {
            return response()->download($pathToFile);
        } else {
            return back()->withErrors(['msg' => 'File not found.']);
        }
    }
}
