@extends('adminlte::page')

@section('title', 'empleados')

@section('content_header')
    <h1>Crear empleados</h1>
@stop

@section('content')
    <form method="post" action="{{route('empleados.store')}}">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Nombres:</label>
                    <input type="text" class="form-control" name="Nombres">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Apellidos:</label>
                    <textarea type="text" class="form-control" rows="3" name="Apellidos"></textarea>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">Cargo:</label>
                    <input type="text" class="form-control" name="Cargo">
                </div>
                <div class="col col-lg-6">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">Salario:</label>
                    <input type="text" class="form-control" name="Salario">
                </div>
                <div class="col col-lg-6">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">Fechaingreso:</label>
                    <input type="text" class="form-control" name="Fechaingreso">
                </div>
                <div class="col col-lg-6">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">Fechasalida:</label>
                    <input type="text" class="form-control" name="Fechasalida">
                </div>
                <div class="col col-lg-6">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">Motivosalida:</label>
                    <input type="text" class="form-control" name="Motivosalida">
                </div>
                <div class="col col-lg-6">
                </div>
            </div>
        </div>



        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <button type="submit" class="btn btn-outline-success btn-block">Guardar</button>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop