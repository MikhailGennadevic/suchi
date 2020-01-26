@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h1>Погода в Омске</h1>

                    <div class="panel-body">
                        <div class="row">{{$weather}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection