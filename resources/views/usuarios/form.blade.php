@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de novo Usuario</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if(Request::is('*/edit'))
                    <form action="{{url('usuarios/update')}}/{{$usuario->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" name="name" class="form-control" placeholder="Coloque Um Nome" value="{{ $usuario->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Coloque Um Email" value="{{$usuario->email}}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                    @else
                    <form action="{{url('usuarios/add')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" name="name" class="form-control" placeholder="Coloque Um Nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Coloque Um Email">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection