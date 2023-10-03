<?php

namespace App\Http\Controllers\Api;

use App\Models\factuer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Resources\FactuerResource;

class ApiFactuerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return dd(Auth::user()->name) ;
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(factuer $factuer)
    {
        return $factuer ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(factuer $factuer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, factuer $factuer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(factuer $factuer)
    {
        $factuer->delete();

        return response()->json(['msg'=>'deleted successfully', 200]);
    }
}
