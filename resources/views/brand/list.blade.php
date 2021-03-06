@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard
                    <a class="pull-right" href="{{url('brand/new')}}">Nova Marca</a>
                    </div>
                    <div class="panel-body">
                        @foreach ($brands as $brand)
                        {{$brand->name}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection