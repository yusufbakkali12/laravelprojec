<?php

namespace App\Http\Controllers;

use App\Models\listproduct;
use App\Models\factuer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ListproductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        // dd("it work");
        $Product = listproduct::All();
        return [
            "status" => 1,
            "data" => $Product
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'listproduct'=>'required|string',
            'Reference'=>'string'
        ]);
        $listproduct = $request->input('listproduct');
        $Reference = $request->input('Reference');
        $Prix = $request->input('Prix');
        $QTE = $request->input('QTE');
        listproduct::create([
            'product' => $listproduct,
            'reference' => $Reference,
            'prix' => $Prix,
            'qte' => $QTE

    ]);

        return redirect()->back();

    }


    /**
     * Display the specified resource.
     */
    public function show(listproduct $listproduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(listproduct $listproduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, listproduct $listproduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(listproduct $listproduct)
    {
        //
    }
}
