@extends('layouts.administrativeLayout')
@section('title', 'Criar Atividade')
<link rel="stylesheet" href="/assets/css/forms.css" />

@section('content')
<div class="container-fluid  mx-auto">
    @include('components.notify')
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-9 text-center">
            <div class="card">
                <h3 class="titleH3">INSIRA OS DADOS PARA CRIAR UMA ATIVIDADE</h3>

                <form class="form-card" action="{{ route('store-activity') }}" method="POST" enctype="multipart/form-data">
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
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">CONDUTOR(A) DA ATIVIDADE</label> <input type="text" id="supervisor" name="supervisor" placeholder="Quem será o responsavel pela atividade"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"><label class="form-control-label px-3">ADICIONE A ARTE DA ATIVIDADE</label><input type="file" name="image" id="image" accept="image/*"> </div>
                   
                    </div>
                    <div class="form-group col-12 flex-column d-flex">
                        <label class="form-control-label px-3">DESCRIÇÃO DO EVENTO</label>
                        <textarea name="description" id="description" placeholder="Seja bem criativo e descritivo"></textarea>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-success">Cadastrar a Atividade</button> </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection