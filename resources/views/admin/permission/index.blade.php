@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Permisos</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item active">Permisos</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-permiso')
                                <a class="btn btn-outline-info" href="{{ route('permissions.create') }}" data-toggle="tooltip" data-placement="left" title="Crear"><i class="fas fa-plus-circle"></i></a>
                            @endcan
                            <hr>
                            @include('custom.message')
                            <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th scope="col">Permiso</th>
                                    <th scope="col">Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                    <tr>
                                        <td scope="row">{{ $permission->name }}</td>
                                        <td>
                                            @can('editar-permiso')
                                                <a class="btn btn-outline-warning btn-sm" href="{{ route('permissions.edit', $permission->id) }}" data-toggle="tooltip" data-placement="left" title="Editar"><i class="far fa-edit"></i></a>
                                            @endcan
                                            @can('borrar-permiso')
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Eliminar']) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                            <div class="pagination justify-content-end">
                                {{ $permissions->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

