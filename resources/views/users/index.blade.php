@extends('layouts.default')
@section('page-title', 'Usuários')
@section('page-actions')
    <a href="{{ route('users.create') }}" class="btn btn-primary">Adicionar</a>
@endsection
@section('content')
    @session('status')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession

    
    <form action="{{ route('users.index') }}" method="GET" class="mb-3">
        <div class="input-group input-group-sm w-25">
            <input type="text" name="keyword" class="form-control me-1" placeholder="Pesquise por nome ou email" value="{{ request()?->keyword }}">
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </div>
    </form>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="d-flex gap-2">
                    @can('edit', \App\Models\User::class)
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    @endcan
                    @can('destroy', \App\Models\User::class)
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    {{ $users->links() }}
@endsection
