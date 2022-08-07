<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function changeAdminPassword(Request $request)
    {
        return view('admin.changePassword');
    }

    public function updateAdminPassword(Request $request)
    {
        $rules = [
            'oldPassword' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        $messages = [
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute field should be string.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $user = User::find(auth()->user()->id);

        if (!$user) {
            return back()->withErrors(['msg' => 'Classification not found'])->withInput($request->all());
        }

        if (!Hash::check($request->oldPassword, $user->password)) {
            return back()->withErrors(['msg' => 'Wrong old password'])->withInput($request->all());
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin.articles.index');
    }

    public function adminLogin()
    {
        return view('admin.login');
    }
}
