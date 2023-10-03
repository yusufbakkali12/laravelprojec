<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
        $this->middleware(['auth','verified']);
     }
    public function index()
    {
        // $order=order::all();
        $order=order::orderBy('created_at', 'desc')->paginate(7);
        $orderPaye=order::where('status','Paye')->orderBy('created_at', 'desc')->paginate(7);
        $orderEnAttent=order::where('status','EnAttente')->orderBy('created_at', 'desc')->paginate(7);
        $orderAnnule=order::where('status','Annule')->orderBy('created_at', 'desc')->paginate(7);

        return view('pages.orders',['order' => $order,
                                    'orderPaye' =>  $orderPaye,
                                    'orderEnAttent' => $orderEnAttent,
                                    'orderAnnule'=>$orderAnnule
                                ]);
        // view('pages.orders');
        // return  dd($order);
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
            'client'=>'required|string|max:50',
            'description'=>'string|max:50',
            'telephone'=>'string',
            'date'=>'date',
            'status'=>'',
        ]);

        $client = $request->input('client');
        $description = $request->input('description');
        $telephone = $request->input('telephone');
        $date = $request->input('date');
        $status = $request->input('status');

        $id=order::create(
            [
                'client' => $client,
                'description' => $description,
                'telephone' => $telephone,
                'date' => $date,
                'status' => $status
            ])->id;
        // return redirect()->route('pages.orders')->with('Success', 'order has been <span class="fw-bold">insert</span> successfully');
        return redirect()->route('orders.index');
        // return dd($id);
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy( $id)
    // {
    //     order::onlyTrashed()->where('id',$id)->forceDelete();
    //     return redirect()->route('orders.trush')->with('Success', 'order has been <span class="fw-bold">Deleted</span> successfully');
    // }

    // public function softDelete($id)
    // {
    //     order::find($id)->delete();
    //     return redirect()->route('order.index')->with('Success', 'order has been <span class="fw-bold">Deleted</span> successfully you can restory in <a class="m-0" href='.route("orders.trush").'>Trush</a>');
    // }
    // public function backDelete($id)
    // {
    //     order::onlyTrashed()->where('id',$id)->first()->restore();
    //     return redirect()->route('orders.trush')->with('Success', 'order has been <span class="fw-bold">Restory</span> successfully');
    // }
    // public function Trashedorder()
    // {
    //     $order=order::onlyTrashed()->latest()->paginate(4);
    //     return view('trush_folder.order',compact('order') );
    // }
}
