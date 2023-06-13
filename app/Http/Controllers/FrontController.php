<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function indexHome(){
        $articles = Article::where('is_accepted', true)->latest()->take(3)->get();

        $images = [];

        foreach ($articles as $article){
            if( Image::where('article_id', $article->id) ){
                $images[] = Image::where('article_id', $article->id);

            }
        }

        return view('welcome', compact('articles'), compact('images'));
    }


    public function categoryShow(Category $category){

        return view('categoryShow', compact('category'));
    }

    public function searchPostit(Request $request){
        $articles = Article::search($request->searched)->where('is_accepted', true)->paginate(10);

        return view('articles.index', compact('articles'));
    }

    public function setLanguage($lang) {
        
        
        session()->put('locale', $lang);
        return redirect()->back();
    
    }
}
