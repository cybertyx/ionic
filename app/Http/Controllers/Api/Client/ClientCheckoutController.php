<?php

namespace DeliveryQuick\Http\Controllers\Api\Client;

use Illuminate\Http\Request;
use \DeliveryQuick\Http\Controllers\Controller;
use \DeliveryQuick\User;
use DeliveryQuick\Models\Order;
use Auth;

class ClientCheckoutController extends Controller
{
    private $user;
    private $order;
    
    public function __construct(User $user, Order $order) {
        
        $this->user = $user;
        $this->order = $order;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //verificar bruno como fazer pra pegar o Id do usuario autenticado pelo Passport
        $clientId = Auth::user()->id;
        $orders = $this->order->with('items')->where('client_id', $clientId)->paginate(5);
        return $orders;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return ['minha ordem'];
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
}
