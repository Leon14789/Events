@extends('layouts.administrativeLayout')
@section('title', 'Criar Evento')
<link rel="stylesheet" href="/assets/css/forms.css" />

@section('content')
<div class="container-fluid mx-auto">
    @include('components.notify')
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-9 text-center">
            <div class="card">
                <h3 class="titleH3">INSIRA OS DADOS PARA CRIAR UM EVENTO</h3>

                <form class="form-card" action="{{ route('create-event') }}" method="POST">
                    @csrf

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">NOME DO EVENTO</label> <input type="text" id="name" name="name" placeholder="Coloque um nome bem criativo"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">DATA DO EVENTO</label> <input type="date" id="date" name="date"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">DESCRIÇÃO DO EVENTO</label> <input type="text" id="description" name="description" placeholder="Seja bem criativo e descritivo" onblur="validate(6)"> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-success">Cadastrar o Evento</button> </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection