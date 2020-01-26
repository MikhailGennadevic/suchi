<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\OrderRepository;
use App\Repositories\PartnerRepository;
use App\Http\Requests\UpdateOrderRequest;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $_orderRepository;
    private $_partnerRepository;

    public function __construct(OrderRepository $orderRepository, PartnerRepository $partnerRepository)
    {
        $this->_orderRepository = $orderRepository;
        $this->_partnerRepository = $partnerRepository;
    }

    public function index()
    {
        $orders = $this->_orderRepository->paginate(20, ['*'], ['partner']);
        return view('orders.index', ['orders' => $orders]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = $this->_orderRepository->find($id);
        $partners = $this->_partnerRepository->getNames();
        return view('orders.edit', ['order' => $order, 'partners' => $partners]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, $id)
    {
        $this->_orderRepository->update($request->all(), $id);
        return redirect(route('orders.edit', [$id]))->with('success', 'Заказ успешно изменен');
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
