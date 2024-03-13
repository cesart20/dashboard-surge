@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de clientes</h1>
@stop

@section('content')

    @livewire('admin.clientes-index')

@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}


