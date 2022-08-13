<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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

    // Non admin

    public function editAccount()
    {
        return view('user.account')->with(['user' => auth()->user(), 'countries' => Country::all()]);
    }

    public function updateAccount(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'institution' => ['nullable', 'string', 'max:255'],
            'countryCode' => ['required', 'max:3', Rule::in(Country::all()->pluck('code')->toArray())],
        ];

        $messages = [
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute field should be string.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        if (User::whereEmail($request->email)->where('id', '!=', auth()->user()->id)->first()) {
            $validator->getMessageBag()->add('email', 'The email has already been taken.');
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->institution = $request->institution;
        $user->country_id = Country::whereCode($request['countryCode'])->first()->id;
        $user->save();

        return back()->with(['successMsg' => 'Your account has been successfully updated']);
    }
}
