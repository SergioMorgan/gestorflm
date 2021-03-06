@extends('layouts.template')

@section('title', 'Creacion de ticket')

@section('content')
    <h1>Pagina para creacion de ticket</h1>

    <form action="{{ route('ostickets.store') }}" method="POST">
        @csrf

        <label>
            ID de SIOM
            <br>
            <input type="text" name="siomid">
        </label>

        <br>
        <label>
            ID de Local
            <br>
            <input type="text" name="localid">
        </label>

        <br>
        <label>
            Estado
            <br>
            <input type="text" name="estado">
        </label>

        <br>
        <label>
            Tipo
            <br>
            <input type="text" name="tipo">
        </label>
        <br>

        <br>
        <label>
            Fecha de asignacion
            <br>
            <input type="text" name="fechaasignacion">
        </label>
        <br>

        <br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>


        <button type="submit">Enviar</button>
    </form>



@endsection()