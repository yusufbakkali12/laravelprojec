<?php

namespace App\Http\Controllers;

use App\Models\Templent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function factuer()
    {
        return view('pages.creationFactuer.Factuer');

    }

    public function devis()
    {
        return view('pages.creationFactuer.Devis');

    }
    public function bonCommande()
    {
        return view('pages.creationFactuer.BonCommande');

    }
    public function bonLivraison()
    {
        return view('pages.creationFactuer.BonLivraison');

    }
    // public function orders()
    // {
    //     return view('pages.orders');

    // }
    public function settings()
    {
        return view('pages.settings');

    }

    public function account()
    {
        return view('pages.account');
    }

    //  public function archive()
    // {
    //     return view('pages.archive');
    // }

    public function clients()
    {
        return view('pages.clients');
    }
    public function poubelles()
    {
        return view('pages.poubelles');
    }

    public function customerFactuer()
    {
        $templents=Templent::paginate(6);
        return view('pages.creationFactuer.Customizefactuer',['templents'=>$templents]);
    }
}
