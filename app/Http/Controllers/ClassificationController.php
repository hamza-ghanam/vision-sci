<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.classifications')->with(['classifications' => Classification::withTrashed()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
        ];

        $messages = [
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute field should be string.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $class = Classification::whereTitle($request->title)->get();

        if (count($class) > 0) {
            return back()->withErrors(['msg' => 'Classification is already exist'])->withInput($request->all());
        }

        Classification::create([
            'title' => $request->title,
        ]);

        return back()->with(['successMsg' => 'Successfully created.']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
        ];

        $messages = [
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute field should be string.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $class = Classification::find($id);

        if (!$class) {
            return back()->withErrors(['msg' => 'Classification not found'])->withInput($request->all());
        }

        $class->title = $request->title;
        $class->save();

        return back()->with(['successMsg' => 'Successfully created.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $class = Classification::find($id);

        if (!$class) {
            return response()->json(['error' => 'No such classification.'], 404);
        }

        Classification::destroy($id);

        return response()->json(['OK' => 'Deleted. ' . $id], 200);
    }

    /**
     * Restore the specified resource into storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function restore($id)
    {
        $class = Classification::withTrashed()->find($id);

        if (!$class) {
            return response()->json(['error' => 'No such classification.'], 404);
        }

        Classification::withTrashed()->find($id)->restore();

        return response()->json(['OK' => 'Deleted. ' . $id], 200);
    }
}
