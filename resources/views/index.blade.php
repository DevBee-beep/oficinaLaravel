@extends('layouts.main')

@section('title')
    Menu
@endsection

@section('content')
    <h1>Menu</h1>

    <a href="{{route('animais.create')}}">Registrar Animal</a>
    <br>
    <a href="{{route('animais.index')}}">Listar Animais</a>
    <br><br>
    
@endsection
