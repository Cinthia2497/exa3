@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1> Empeados </h1>
@stop

@section('content')

@if (session()->get('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif

<table class="table table-bordered table">
    <thead>
        <tr >
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cargo</th>
            <th>Salario</th>
            <th>Fecha de Ingreso</th>
            <th>Fecha de Salida</th>
            <th>Motivo de Salida</th>
        </tr>
    </thead>
    <tbody>
     @foreach ($empleados as $empleados)
        <tr>
            <td> {{$empleados->id}}</td>
            <td> {{$empleados->Nombres}}</td>
            <td> {{$empleados->Apellidos}}</td>
            <td> {{$empleados->Cargo}}</td>
            <td> {{$empleados->Salario}}</td>
            <td> {{$empleados->Fechaingreso}}</td>
            <td> {{$empleados->Fechasalida}}</td>
            <td> {{$empleados->Motivosalida}}</td>
            <td>
                <a href="{{route('empleados.edit', $empleados->id)}}" class="btn btn-success btn-sm">Editar</a>
                <form action="{{route('empleados.destroy', $empleados->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop