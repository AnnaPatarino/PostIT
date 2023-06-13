<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index ()
    {
    
    $to_check = Article::where('is_accepted', null)->first();

   

    return view('revisor.index', compact('to_check'));
    
    }


    public function accept (Article $article) 
    {

        $article->setAccepted(true);

        return redirect()->back()->with('success','Complimenti, hai accettato il POSTit');
    
    
    }


    public function reject (Article $article) 
    {
    
        $article->setAccepted(false);

        return redirect()->back()->with('success','Ci dispiace, hai rifiutato il POSTit');
    }

    public function nullable (Article $article) 
    {
    
        $article->setAccepted(NULL);

        return redirect()->back()->with('success','Ci dispiace, hai inviato nuovamente il POSTit in revisione');
    }

    public function lavoro ()
    {

        return view('revisor.lavoraconnoi');

    }

    public function becomeRevisor()
    {
        Mail::to('admin@postit.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('success', 'Complimenti, hai richiesto di diventare revisore correttamente!');
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor',  ["email"=>$user->email]);
        return redirect('/')->with('success', 'Complimenti, utente è diventato revisore!');
    }

    public function consoleArticles(){

        $allArticles = Article::orderBy('created_at', 'desc')->get();

        return view('revisor.admin', compact('allArticles'));

    }

}
