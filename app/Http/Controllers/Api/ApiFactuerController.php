<?php

namespace App\Http\Controllers\Api;
use App\Models\factuer;
use App\Models\designation;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
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


        // $factuers_id=factuer::create( [
        //     'numFacture'=>$request->header['numFacture'],
        //     'date'=>$request->header['date'],
        //     'status'=>'false',
        //     'objectCar'=>$request->header['objectCar'],
        //     'modelCar'=>$request->header['modelCar'],
        //     'matriqulCar'=>strtoupper($request->header['matriqulCar']),
        //     'kilometrageCar'=>$request->header['kilometrageCar'],
        //     'MontantHT'=>$request->footer['MontantHT'],
        //     'MontantTTC'=>$request->footer['MontantTTC'],
        //     'MontantTVA'=>$request->footer['MontantTVA'],
        //     'user_id'=>Auth::id()
        //    ])->id;
        // foreach ($request->body as $e) {
        //     designation::create([
        //         'Designation'=>$e['Designation'],
        //         'PrixUniter'=>$e['PrixUniter'],
        //         'PrixTotal'=>$e['PrixTotal'],
        //         'Qte'=>$e['Qte'],
        //         'Unite'=>$e['Unite'],
        //         'factuers_id'=>$factuers_id
        //     ]);
        // };
        // factuer::truncate();
        return response()->json([
            // $factuers_id,
          "header"=>  $request->header,
          "body"=>  $request->body,
          "footer"=>  $request->footer,
            'msg'=>'Product added successfully',
        ]);
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
