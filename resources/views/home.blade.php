@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Deixa Seu LIKE</h1>
@stop

@section('content')
    {{--  ;<button type="button" class="btn btn-primary">Cliente</button>  --}}
    <a href="{{route('paciente.index')}}" class="btn btn-primary">Cliente</a>
@stop