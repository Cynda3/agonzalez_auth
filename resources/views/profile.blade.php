@extends('layouts.mainud6')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        session ('status')
                    @endif

                </div>
            </div>
            <div class="form-body">
                <h2>Edita tu perfil:</h2>
                <span>Nombre:</span>
                <input type="text" name="name"><br>
                <span>Correo:</span>
                <input type="email" name="correo"><br>
                <span>Contraseña:</span>
                <input type="password" name="contraseña">
            </div>
        </div>
    </div>
</div>
@endsection
