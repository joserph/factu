@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item active">Roles</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-rol')
                                <a class="btn btn-outline-info btn-sm" href="{{ route('roles.create') }}" data-toggle="tooltip" data-placement="left" title="Crear"><i class="fas fa-plus-circle"></i></a>
                            @endcan
                            <hr>
                            @include('custom.message')
                            <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td scope="row">{{ $role->name }}</td>
                                            <td>
                                                @can('editar-rol')
                                                    <a class="btn btn-outline-warning btn-sm" href="{{ route('roles.edit', $role->id) }}" data-toggle="tooltip" data-placement="left" title="Editar"><i class="far fa-edit"></i></a>
                                                @endcan
                                                @can('borrar-rol')
                                                    @if ($role->name != 'Super Administrador')
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Eliminar']) !!}
                                                    {!! Form::close() !!}
                                                    @endif
                                                    
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                            <div class="pagination justify-content-end">
                                {{ $roles->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

