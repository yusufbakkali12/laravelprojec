<?php

namespace App\Http\Controllers;

use App\Models\factuer;
use App\Models\designation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class FactuerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    public function index()
    {
        // dd(Auth::id());
        $Product=factuer::with('Designation')->get();

        // $Product =factuer::all();
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

            $factuers_id=factuer::create( [
                'numFacture'=>$request->header['numFacture'],
                'date'=>$request->header['date'],
                'status'=>'false',
                'objectCar'=>$request->header['objectCar'],
                'modelCar'=>$request->header['modelCar'],
                'matriqulCar'=>strtoupper($request->header['matriqulCar']),
                'kilometrageCar'=>$request->header['kilometrageCar'],
                'MontantHT'=>$request->footer['MontantHT'],
                'MontantTTC'=>$request->footer['MontantTTC'],
                'MontantTVA'=>$request->footer['MontantTVA'],
                'user_id'=>Auth::id()
               ])->id;
            foreach ($request->body as $e) {
                designation::create([
                    'Designation'=>$e['Designation'],
                    'PrixUniter'=>$e['PrixUniter'],
                    'PrixTotal'=>$e['PrixTotal'],
                    'Qte'=>$e['Qte'],
                    'Unite'=>$e['Unite'],
                    'factuers_id'=>$factuers_id
                ]);
            };
            // factuer::truncate();
            return response()->json([
                // $factuers_id,
                $request->header,
                'msg'=>'Product added successfully',
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(factuer $factuer)
    {
    //   $factuers= factuer::with('Designation')->find($factuer->id);
      return dd($factuer);
    //   response()->json([
    //     $factuers,
    //     'msg'=>'Product added successfully',
    // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(factuer $factuer)
    {

        //  response()->json([

            $factuer::where('id',$factuer->id)->with('Designation')->get();

        // ]);
        return view('pages.editFactuer.factuer' ,compact('factuer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, factuer $factuer)
    {

        $factuers=factuer::findOrFail($factuer->id);


        if($factuers){
            // $factuers->update([
            //     'numFacture'=>$request->header['numFacture'],
            //     'date'=>$request->header['date'],
            //     'status'=>'false',
            //     'objectCar'=>$request->header['objectCar'],
            //     'modelCar'=>$request->header['modelCar'],
            //     'matriqulCar'=>$request->header['matriqulCar'],
            //     'kilometrageCar'=>$request->header['kilometrageCar'],
            //     'MontantHT'=>$request->footer['MontantHT'],
            //     'MontantTTC'=>$request->footer['MontantTTC'],
            //     'MontantTVA'=>$request->footer['MontantTVA']
            // ]);

            // $designation= designation::find($factuer->id);

            // foreach ($request->body as $e) {
            //     $designation->update([
            //         'D_numFacture'=>'',
            //         'Designation'=>$e['Designation'],
            //         'PrixUniter'=>$e['PrixUniter'],
            //         'PrixTotal'=>$e['PrixTotal'],
            //         'Qte'=>$e['Qte'],
            //         'Unite'=>$e['Unite'],
            //         'factuers_id'=>$factuer->id
            //     ]);
            // };
            return response()->json([
                'status'=>true,
                'message'=>'found .',
                'data'=>$factuers,
                '$factuer->id'=> $factuer->id,
            ]);

        }
        else{
            return response()->json([
                'status'=>false,
                'message'=>'not found .',
                'data'=> null,
            ],404);
        }



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(factuer $factuer)
    {
        //
    }
}
