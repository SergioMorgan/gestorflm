@extends('layouts.template')

@section('title', 'Creacion de actuaciones')

@section('content')
    <h1>CREAR ACTUACIONES</h1>

    <form action="{{ route('actions.store') }}" method="POST">
        @csrf

        <label>
            ID de SIOM
            <br>
            <input type="text" name="siomid">
        </label>

        <br>
        <label>
            Nombre de usuario
            <br>
            <input type="text" name="username">
        </label>

        <br>
        <label>
            Detalle
            <br>
            <textarea name="detalle" rows="5"></textarea>
        </label>
        <br>


        <button type="submit">Enviar</button>
    </form>
    
@endsection()