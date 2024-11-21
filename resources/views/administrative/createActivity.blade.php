@extends('layouts.administrativeLayout')
@section('title', 'Criar Atividade')
<link rel="stylesheet" href="/assets/css/forms.css" />

@section('content')
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-9 text-center">
            <div class="card">
                <h3 class="titleH3">INSIRA OS DADOS PARA CRIAR UMA ATIVIDADE</h3>

                <form class="form-card"  action="{{ route('store-activity') }}" method="POST" >
                @csrf
                    <input type="hidden" name="event_id" value="{{ $eventId }}">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">NOME DA ATIVIDADE</label> <input type="text" id="name" name="name" placeholder="Coloque um nome bem criativo"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">DATA DA ATIVIDADE</label> <input type="date" id="date" name="date"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">HORÁRIO DA ATIVIDADE</label> <input type="time" id="hours" name="hours"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">QUANTIDADE DE VAGAS</label> <input type="number" id="vacancies" name="vacancies"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">CONDUTOR(A) DA ATIVIDADE</label> <input type="text" id="supervisor" name="supervisor" placeholder="Quem será o responsavel pela atividade"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">DESCRIÇÃO DA ATIVIDADE</label> <input type="text" id="description" name="description" placeholder="Quem será o responsavel pela atividade"> </div>
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