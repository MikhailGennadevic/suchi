@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Заказ {{$order->id}}</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    {{Form::model($order, ['route' => ['orders.update', $order->id], 'method' => 'PATCH'])}}
    <div class="row">

        <div class="form-group col-sm-6">
            {!! Form::label('client_email', 'Email*:') !!}
            {!! Form::email('client_email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('status', 'Статус*:') !!}
            {!! Form::select('status', $order->statuses, null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <div class="form-group col-sm-6">
            {!! Form::label('partner_id', 'Статус*:') !!}
            {!! Form::select('partner_id', $partners, null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <div class="form-group col-sm-12">
            <div class="form-group col-sm-6">
                <table class="table">
                    <tr>
                        <th>Продукт</th>
                        <th>Колличество</th>
                    </tr>
                    @foreach($order->orderProducts as $orderProduct)
                        <tr>
                            <td>{{$orderProduct->product->name}}</td>
                            <td>{{$orderProduct->quantity}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div>
            <p>Итого: {{$order->amount}}</p>
        </div>
        <div class="form-group col-sm-12">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>

    </div>
    {{Form::close() }}
@endsection