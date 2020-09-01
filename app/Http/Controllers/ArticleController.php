<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;

class ArticleController extends Controller
{
    Public function index()
    {
    	$article = Article::all();
    	// dd($article);

    	return view('article', compact('article'));
    }
}
