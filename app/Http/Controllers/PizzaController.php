<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\Order;
use App\OrderPizza;
use DB;
class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzaLisa=Pizza::orderBy('id','ASC')
        ->with('category')
        ->with('image')
        ->get();
        $countCartList=OrderPizza::count();
        $orderPizzaList=OrderPizza::with('pizza')->get();
        // dd($countCartList);
        return view('home',[
            'pizzaLisa' => $pizzaLisa,
            'countCartList' => $countCartList,  
            'orderPizzaList' => $orderPizzaList,           
        ]);
    }

    public function addToCart()
    {
        $data=Order::count();
        return $data;
    }

    public function cart()
    {
        $data=Order::count();
        return $data;
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response=array();
        $response['status']=false;
        $response['data'] ='';

        DB::beginTransaction();
        try {

           OrderPizza::create([
                'pizza_id' => $id,
            ]);
            
            DB::commit();
            $response['status'] = true;
        } catch (\Exception $e) {
            $response['data']=$e->getMessage();
            $response['status'] = false;
            DB::rollback();
        }
            
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteCart($id)
    {
        OrderPizza::where('id',$id)->delete();
        return redirect('/');
    }
}
