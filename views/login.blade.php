@extends('layouts.master')
@section('title', 'Inicio')
@section('header') 
    <br>
    <center><h1>Inicio de sesión</h1></center>
@stop
@section('contenido')
    <br>
    <center>
    <form action="{{action('PruebaController@validarLogin')}}" method="post">
    {{csrf_field()}}
            <label for="user">User</label>
            <input type="text" name="user">
        <br>
        <br>
            <label for="password">Password</label>
            <input type="text" name="password">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form> 
    </center>
    <br> 
@stop
@section('footer')
    @parent
@stop