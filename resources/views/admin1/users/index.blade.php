@extends('adminlte::page')
@section('title', 'Admin-healthylife')

@section('content_header')
    <h1>Control-users</h1>
@stop

@section('content')
   @livewire('management-users')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop