@extends('layouts.baseLayout')
@section('title', 'Atividade')

@section('content')
<!-- Main Wrapper -->
<div id="main-wrapper">
    <div class="wrapper style3">
        <div class="inner">
            <div class="container">
            @include('components.notify')
                <div class="row">
                    <div class="col-12 col-12-medium">

                        <!-- Article list -->
                        <section class="box article-list">
                            <h2 class="icon fa-file-alt">{{$activity->name}}</h2>
                            <article class="box excerpt d-flex">
                                <img class="imagemActivity" src="{{ $activity->image ? asset('storage/' . $activity->image) : '/assets/images/pic04.png' }}" alt="{{ $activity->name }}" />

                                <div>
                                    <header>
                                        <span class="date">DATA {{$activity->date}}</span>
                                        <h3>CONDUTOR(A): {{$activity->supervisor}} </h3>
                                    </header>
                                    <div>{!! $activity->description !!}</div>
                                </div>
                            </article>

                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead class="thead-primary bg-secondary text-white">
                                        <tr>
                                            <th scope="col">Nome do Aluno</th>
                                            <th scope="col">Turma</th>
                                            <th scope="col">Período</th>

                                        </tr>
                                    </thead>
                                    @foreach($students as $student)
                                    <tbody>
                                        <tr>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->class}}</td>
                                            <td>{{$student->period}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>

                            </div>
                        </section>
                        <a href=" {{route('register-student', [$activity->id]  )}} " class="btn btn-success btn-lg btn-block link">Cadastrar-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection