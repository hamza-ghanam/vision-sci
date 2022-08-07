<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Classification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with(['classifications' => Classification::all(), 'articles' => Article::where('status', 'Accepted')->limit(4)->get()]);
    }
}
