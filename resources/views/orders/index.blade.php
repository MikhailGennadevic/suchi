@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Заказы</h1>
    </div>

    <div class="row">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Партнер</th>
                <th>Статус</th>
                <th>Стоимость</th>
                <th>Состав</th>
                <th>Edit</th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->partner->name}}</td>
                    <td>{{$order->status_name}}</td>
                    <td>{{$order->amount}}</td>
                    <td>{!!$order->composition!!}</td>
                    <td><a href="{!! route('orders.edit', [$order->id]) !!}" >Edit</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="row">
        {{$orders->render()}}
    </div>
@endsection