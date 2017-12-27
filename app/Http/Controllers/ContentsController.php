<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Content;

class ContentsController extends Controller
{
    public function index() {
    	$data = Content::paginate(2);
    	return view('contents.index', compact('data'));
    }

    public function getArticle($id) {
    	$data = Content::where('id', $id)->first();
    	return view('contents.edit', compact('data'));
    }

    public function updateArticle(Request $request) {
    	$data = array(
    		'title' =>  $request->input('title'),
    		'excerpt' =>  $request->input('excerpt'),
    		'content' =>  $request->input('content')
    	);

    	Content::where('id',  $request->input('id'))->update($data);
    	return redirect('articles')->with('status', 'Update Success...');
    }
}
