<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ArticleController extends Controller
{
    public function search(Request $request)
    {
        $request->term = strtolower($request->term);

        $articles = Article::where('title', 'LIKE', "%{$request->term}%")
            ->orWhere('keywords', 'LIKE', "%{$request->term}%")
            ->orWhere('abstract', 'LIKE', "%{$request->term}%")
            ->orWhereHas('classification', function ($query) use ($request) {
                $query->where('title', 'LIKE', "%{$request->term}%");
            })
            ->get();

        $authors = User::where('name', 'LIKE', "%{$request->term}%")->get();

        foreach ($authors as $author) {
            $articles = $articles->merge($author->articles->where('status', 'Accepted'));
        }

        return view('article.search')->with(['articles' => $articles->where('status', 'Accepted')]);
    }

    public function review(Request $request, $id)
    {
        //dd($request->all());
        $rules = [
            'comment' => ['required', 'string', 'max:255'],
            'rating' => ['required', 'integer', 'min:0', 'max:5'],
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

        $article = Article::whereId($id)->where('status', 'Accepted')->first();

        if (!$article) {
            return back()->withErrors(['msg' => 'Article not found.']);
        }

        $review = Review::create([
            'comment' => $request->comment,
            'rate' => $request->has('rating') ? $request->rating : 0,
            'user_id' => auth()->user()->id,
            'article_id' => $id,
        ]);

        if ($review) {
            return redirect()->route('profile.show', ['id' => $id])
                ->with('successMsg', 'Review has been submitted!');
        }

    }

    public function adminIndex()
    {
        $articles = Article::all();

        foreach ($articles as $key => $article) {
            $submitter = User::find($article->submitter);
            $article->submitter = $submitter ? $submitter->name : '-';
        }

        return view('admin.articles')->with(['articles' => $articles]);
    }

    public function adminArticleShow($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return back()->withErrors(['msg' => 'Article not found.']);
        }

        $article->avgRate = 0;

        $sum = 0;
        if (count($article->reviews) > 0) {
            foreach ($article->reviews as $rev) {
                $sum += $rev->rate;
            }

            $article->avgRate = ceil($sum / count($article->reviews));
        }

        if ($article->submitter !== null) {
            $submitter = User::find($article->submitter);
            $article->submitter = $submitter ? $submitter->name : '-';
        }

        return view('admin.articleShow')->with(['article' => $article]);
    }

    public function adminArticleUpdate(Request $request, $id)
    {
        $rules = [
            'newStatus' => ['required', 'string', Rule::in(['New', 'Under Reviewed', 'Resubmit', 'Accepted', 'Rejected'])],
            'articleFile' => ['nullable', 'mimetypes:application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'max:5120'],
        ];

        $messages = [
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute field should be string.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $article = Article::find($id);

        DB::transaction(function () use ($request, $article) {
            $article->status = $request->newStatus;

            if ($request->articleFile) {
                $fileName = 'article_' . time() . '.' . $request->articleFile->extension();

                $request->articleFile->storeAs('uploads', $fileName);
                $article->link = $fileName;
            }

            $article->save();
        });

        return back()->with(['successMsg' => 'Successfully updated']);
    }
}
