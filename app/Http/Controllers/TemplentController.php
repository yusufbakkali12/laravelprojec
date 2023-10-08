<?php

namespace App\Http\Controllers;

use App\Models\Templent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;


class TemplentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $all=Templent::all();
        return dd($all);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // $validated = $request->validate([
        //     "nametemplent" => 'required|alpha_num|unique:templents,name|min:3|max:10',
        // ]);
    //    $show= $request->collect();


    return response()->json([
            $request->header,
            'msg'=>'Product added successfully',]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Templent $templent): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Templent $templent): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Templent $templent): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Templent $templent): RedirectResponse
    {
        //
    }
}
