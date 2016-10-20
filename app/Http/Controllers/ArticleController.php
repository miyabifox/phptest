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
		$article ->sex = $data["sex"];
		$article ->address = $data["address"];
		$article ->email = $data["email"];
		$article ->birthday = $data["birthday"];
		$article ->save();
		
		//$article = new Article;
		//$article->fill($data)->save();
		
		//Article::create($data);
		
		return redirect()->to('article/complete');
    }

    public function complete() {
	return view('article.complete');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('article.edit')->with(compact('article'));
    }
	
   public function update(Request $request, $id)
   {
		$data = $request->all();
		
		$article = Article::findOrFail($id);
		$article ->name = $data["name"];
		$article ->sex = $data["sex"];
		$article ->address = $data["address"];
		$article ->email = $data["email"];
		$article ->birthday = $data["birthday"];
		$article ->save();
		
		return redirect()->to('article/complete');
    }
	
	public function delete($id)
	{
    $article = Article::find($id);
    return view('article.delete')->with(compact('article'));
	}

	public function destroy(Request $request)
	{
    $data = $request->all();
    $article = Article::find($data["id"]);
    $article->delete();
    return redirect()->to('article/complete');
	}
}