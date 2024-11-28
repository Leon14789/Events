@extends('layouts.administrativeLayout')
@section('title', 'Atividade')

@section('content')
<!-- Main Wrapper -->
<div id="main-wrapper">
    <div class="wrapper style3">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-12-medium">

                        <!-- Article list -->
                        <section class="box article-list">
                            <h2 class="icon fa-file-alt">{{$activity->name}}</h2>
                            <article class="box excerpt d-flex">
                                <img class="imagemActivity" src="{{ $activity->image ? asset('storage/' . $activity->image) : '/assets/images/Defalt.png' }}" alt="{{ $activity->name }}" />

                                <div class="ml-2">
                                    <header>
                                        <span class="date">DATA {{$activity->date}}</span>
                                        <h3>CONDUTOR(A): {{$activity->supervisor}} </h3>
                                    </header>
                                    <div>{!! $activity->description !!}</div>
                                </div>
                            </article>

                            <div class="table-responsive">
                                <table class="table table-hover table-bordered ">
                                    <thead class="thead-primary bg-secondary text-white">
                                        <tr>
                                            <th scope="col">Nome do Aluno</th>
                                            <th scope="col">Registro Geral</th>
                                            <th scope="col">Turma</th>
                                            <th scope="col">Período</th>
                                            <th scope="col">Ação</th>

                                        </tr>
                                    </thead>
                                    @foreach($students as $student)
                                    <tbody>
                                        <tr>
                                            <td> {{$student->name}} </td>
                                            <td> {{$student->rg}} </td>
                                            <td> {{$student->class}} </td>
                                            <td> {{$student->period}} </td>
                                            <td>
                                                <form action="{{ route('destroy-student', [$student->id]) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger link">DELETAR</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            <div class="d-flex justiy-content-around">

                                <form action="{{ route('roll-call', [$activity->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Gerar Chamada</button>
                                </form>

                                
                            </div>


                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection