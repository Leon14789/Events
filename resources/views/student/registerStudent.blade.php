@extends('layouts.baseLayout')
@section('title', 'Cadastro de Alunos')
<link rel="stylesheet" href="/assets/css/forms.css" />

<x-menu />
@section('content')
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-9 text-center">
            <div class="card">
                <h3 class="titleH3">INSIRA SEUS DADOS PARA SE CADASTRAR NA ATIVIDADE</h3>
                <form class="form-card">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">NOME</label> <input type="text" id="name" name="name" placeholder="Insira seu nome completo"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">TURMA</label> <input type="text" id="class" name="class" placeholder="Insira sua turma"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">RG</label> <input type="text" id="rg" name="rg" placeholder="Insira seu RG"> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-success">Cadastrar-se</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection