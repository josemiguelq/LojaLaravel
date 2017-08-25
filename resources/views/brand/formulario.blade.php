@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nova Marca
                    <a class="pull-right" href="{{url('brand/new')}}">Salvar</a>
                    </div>
                    <div class="panel-body">
                        Formulario
                        {!! Form::open(['url'=>'brand/save'])!!}
                        {!! Form::label('Name') !!}
                        {!! Form::input('text','name','',['class'=>'form-control','autofocus','placeholder'=>'Name']) !!}
                        {!! Form::submit('Save', ['class'=>'btn btn-sm btn-primary']) !!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection