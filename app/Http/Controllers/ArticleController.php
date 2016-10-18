<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class ArticleController extends Controller
{
    /**
	* Display s listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		//
        $articles = Article::all();
		return view('article.index')->with(compact('articles'));
	}

    public function create() {
	return view('article.create');
    }

   public function store(Request $request)
   {
		$data = $request->all();
		
		$article = new Article;
		$article ->name = $data["name"];
		$article ->sex = "男";
		$article ->address = "aaa";
		$article ->email = $data["email"];
		$article ->birthday = "2016-04-21";
		$article ->save();
		
		//$article = new Article;
		//$article->fill($data)->save();
		
		//Article::create($data);
		
		return redirect()->to('article/complete');
    }

    public function complete() {
	return "登録が完了しました";
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('article.edit')->with('article',$article);
    }

}