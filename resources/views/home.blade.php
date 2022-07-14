@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card bg-c-blue order-card">
                                        <div class="card-blok">
                                            <h5>Usuarios</h5>
                                            @php
                                                use App\Models\User;
                                                $countUsers = User::count();
                                            @endphp
                                            <h2 class="text-right">
                                                <i class="fa fa-users f-left"></i><span>{{ $countUsers }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right">
                                                <a href="{{ route('users.index') }}" class="text-white">Ver mas</a>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-sm">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-blok">
                                            <h5>Roles</h5>
                                            @php
                                                use Spatie\Permission\Models\Role;
                                                $countRoles = Role::count();
                                            @endphp
                                            <h2 class="text-right">
                                                <i class="fas fa-user-cog f-left"></i><span>{{ $countRoles }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right">
                                                <a href="{{ route('roles.index') }}" class="text-white">Ver mas</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

