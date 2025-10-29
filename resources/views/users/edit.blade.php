@extends('layouts.default')
@section('page-title', 'Editar Usuário')
@section('content')
    @session('status')
        <div class="alert  alert-success">
            {{ $value }}
        </div>
    @endsession
    @include('users.parts.basic-details')
    <br>
    @include('users.parts.profile')
    <br>
    @include('users.parts.interests')
    <br>
    @include('users.parts.roles')
@endsection
