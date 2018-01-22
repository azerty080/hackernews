<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    	return view('home');
    }


    public function add()
    {
        return view('articles.add');
    }


    public function store(ArticleRequest $request)
    {
    	$article = new Article($request->all());
    	$article->user_id = Auth::id();
    	$article->points = 0;
    	$article->save();




    }


    public function edit()
    {
        return view('articles.edit');
    }
}
