@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
<h1>Registrar Empleado</h1>
@stop

@section('content')
<form method="post" action="{{route('empleados.update', $empleados->id)}}">
@csrf
@method('PATCH')
<div class="form-group">
<div class="row">
<div class="col col-lg-2">
</div>
<div class="col col-lg-8">
<label for="txtNombre" class="visually-hidden">Nombres</label>
<input type="text" class="form-control" name="Nombres" value="{{$empleados->Nombres}}">
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
<label for="txtNombre" class="visually-hidden">Apellidos</label>
<input type="text" class="form-control" name="Apellidos" value="{{$empleados->Apellidos}}">
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
<label for="txtNombre" class="visually-hidden">Cargo</label>
<input type="text" class="form-control" name="Cargo" value="{{$empleados->Cargo}}">
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
<label for="txt
Nombre" class="visually-hidden">Salario</label>
<input type="text" class="form-control" name="Salario" value="{{$empleados->Salario}}">
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
<label for="txtNombre" class="visually-hidden">Fecha Ingreso</label>
<input type="text" class="form-control" name="Fechaingreso" value="{{$empleados->Fechaingreso}}">
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
<label for="txtNombre" class="visually-hidden">Fecha Salida</label>
<input type="text" class="form-control" name="Fechasalida" value="{{$empleados->Fechasalida}}">
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
<label for="txtNombre" class="visually-hidden">Motivo de Salida:</label>
<textarea type="text" class="form-control" rows="3" name="Motivosalida">{{$empleados->Motivosalida}}</textarea>
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
<button type="submit" class="btn btn-outline-success btn-block">Guardar</button>
</div>
<div class="col col-lg-2">
</div>
</div>
</div>
</form>
</div>

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