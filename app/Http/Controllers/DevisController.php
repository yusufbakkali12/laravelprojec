<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\designation_devis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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


                $Devis_id=Devis::create( [
                    'numDevis'=>$request->header['numDevis'],
                    'date'=>$request->header['date'],
                    'status'=>'false',
                    'objectCar'=>$request->header['objectCar'],
                    'modelCar'=>$request->header['modelCar'],
                    'matriqulCar'=>$request->header['matriqulCar'],
                    'kilometrageCar'=>$request->header['kilometrageCar'],
                    'MontantHT'=>$request->footer['MontantHT'],
                    'MontantTTC'=>$request->footer['MontantTTC'],
                    'MontantTVA'=>$request->footer['MontantTVA'],

                   ])->id;
                foreach ($request->body as $e) {
                    designation_devis::create([
                        'Designation'=>$e['Designation'],
                        'PrixUniter'=>$e['PrixUniter'],
                        'PrixTotal'=>$e['PrixTotal'],
                        'Qte'=>$e['Qte'],
                        'Unite'=>$e['Unite'],
                        'devis_id'=>$Devis_id
                    ]);
                };

                return response()->json([
                    // $factuers_id,
                    $request->header,

                    'msg'=>'Product added successfully',
                ]);
        }



    /**
     * Display the specified resource.
     */
    public function show(Devis $devis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devis $devis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devis $devis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Devis $devis)
    {
        //
    }
}
