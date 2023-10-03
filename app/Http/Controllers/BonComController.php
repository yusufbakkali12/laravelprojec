<?php

namespace App\Http\Controllers;

use App\Models\bonCom;
use App\Models\bonComVehicule;
use App\Models\bonComDesignation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BonComController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $v=bonCom::find(1)->BonComVehicule;
        // // $c=array();
        // // foreach($v as $k){
        //     $c=bonComVehicule::find(4)->BonComDesignation ;
        // // }
        $v=bonCom::with('BonComVehicule', 'BonComVehicule.BonComDesignation')->get();




        return response()
        ->json([
            'data' =>$v,
            'msg' =>'success',
        ]);
        //   return json_decode($v);

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
        $bon_coms_id=bonCom::create( [
            'numBonCom'=>$request->numBonCo,
            'data'=>$request->data,
            'status'=>$request->status,
        ])->id;
        foreach ($request->vehicules as $ve) {
            $vehicules_id=bonComVehicule::insertGetId([
                'vehicle'=>$ve['vehicle'],
                'status'=>$ve['status'],
                'bon_coms_id'=>$bon_coms_id
            ]);
            foreach ($ve['Designation'] as $De) {
                bonComDesignation::insert([
                    'Qte'=>$De['Qte'],
                    'Designation'=>$De['Designation'],
                    'Reference'=>$De['Reference'],
                    'Marce'=>$De['Marce'],
                    'bon_com_vehicules_id'=>$vehicules_id
                ]);
            };
        }
        return response()->json([
            $request->vehicules ,
            'msg'=>'Product added successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(bonCom $bonCom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bonCom $bonCom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bonCom $bonCom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bonCom $bonCom)
    {
        //
    }
}
