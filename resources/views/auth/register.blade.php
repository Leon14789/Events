@extends('layouts.administrativeLayout')
@section('title', 'Criar Administrador')
<link rel="stylesheet" href="/assets/css/forms.css" />

@section('content')
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-9 text-center">
            <div class="card">
                <form class="form-card"  method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nome </label> <input type="text" id="name" name="name" placeholder="Nome Completo"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email</label> <input type="email" id="email" name="email" placeholder="Email" required autocomplete="username" /></div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Senha</label> <input type="password" placeholder="Senha" name="password"  required autocomplete="new-password" /> </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Confirmar Senha</label> <input id="password_confirmation" placeholder="Confirmar Senha"  type="password"  name="password_confirmation" required autocomplete="new-password" /> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-success">Cadastrar a Atividade</button> </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection