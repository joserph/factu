@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item active">Usuarios</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-usuario')
                                <a class="btn btn-outline-info btn-sm" href="{{ route('users.create') }}" data-toggle="tooltip" data-placement="left" title="Crear"><i class="fas fa-plus-circle"></i></a>
                            @endcan
                            <hr>
                            @include('custom.message')
                            <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if (!empty($user->getRoleNames()))
                                                @foreach ($user->getRoleNames() as $rolName)
                                                    <h5><span class="badge badge-dark">{{ $rolName }}</span></h5>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @can('editar-usuario')
                                                <a class="btn btn-outline-warning btn-sm" href="{{ route('users.edit', $user->id) }}" data-toggle="tooltip" data-placement="left" title="Editar"><i class="far fa-edit"></i></a>
                                            @endcan
                                            @if ($rolAdmin->users[0]->id != $user->id)
                                                @can('borrar-usuario')
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Eliminar']) !!}
                                                    {!! Form::close() !!}
                                                @endcan
                                            @endif
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                              </table>
                            <div class="pagination justify-content-end">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

