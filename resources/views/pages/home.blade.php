@extends('layouts.main-layout')

@section('content')
    
    <h1>home</h1>

    <a class="btn btn-primary" href="{{ route('create.postcard') }}"> CREATE POSTCARD</a>

    <postcards-component></postcards-component>


@endsection