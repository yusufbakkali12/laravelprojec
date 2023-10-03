<?php

namespace App\Http\Controllers;
use App\Models\bonCom;
use App\Models\factuer;
use App\Models\designation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class archiveController extends Controller

{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        $factuer=factuer::orderBy('created_at', 'desc')->paginate(12);
        $bonCom=bonCom::orderBy('created_at', 'desc')->paginate(7);
        return view('pages.archive',['factuer'=>$factuer,'bonCom'=>$bonCom]);
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
    //    $factuer= factuer::where('id',$id)->with('Designation')->get();


    //    $des=designation::where('factuers_id',$id)->with('factuer')->get();;
        $factuer= factuer::findOrFail($id);
        $des=designation::where('factuers_id',$id)->get();;
        $factuer->designation=$des;
        return response()->json($factuer);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
