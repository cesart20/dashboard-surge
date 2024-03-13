@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('admin.roles.create') }}" class="btn btn-secondary btn-base float-right">Nuevo Rol</a>
    <h1>Lista de Roles</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success"><strong>{{ session('info') }}</strong></div>
    @endif

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td width="10px">
                            {{-- @can('admin.roles.edit') --}}
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role) }}">Editar</a>
                            {{-- @endcan --}}
                        </td>
                        <td width="10px">
                            {{-- @can('admin.roles.destroy') --}}
                                <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            {{-- @endcan --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
