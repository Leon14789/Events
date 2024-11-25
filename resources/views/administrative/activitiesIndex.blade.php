@extends('layouts.administrativeLayout')
@section('title', 'Lista de Atividades')

@section('content')
<!-- Main Wrapper -->
<div id="main-wrapper">
    <div class="wrapper style3">
        <div class="inner">
            <div class="container">
            @include('components.notify')
                <div class="row">
                    <div class="col-12 col-12-medium">
                            <h2 class="text-center">ATIVIDADES RELACIONADAS AO EVENTO: {{$event->name}}</h2>
                        <a href="{{ route('create-activity',  [$event->id]) }}" class="link">
                        <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                            <h2 class="icon fa-file-alt text-center">CRIE UMA NOVA ATIVIDADE</h2>
                        </a>
                        <!-- Article list -->
                        <section class="box article-list">

                            <!-- Excerpt -->
                      @foreach($activities as $activity)
                            <article class="box excerpt">
                                <a href="#" class="image left">
                                    <img src="/assets/images/pic04.png" alt="" /></a>
                                <div class="event-container">
                                    <header>
                                        <span class="date">Dia:{{$activity->date ?? 'Dia não definido'}} às: {{$activity->hours ?? 'Horario não definido'}}   </span>
                                        <h3><a href="{{route('activity', [$activity->id]  )}}">{{$activity->name ?? 'Nome não Definido'}} </a></h3>
                                        <h3>Vagas:{{$activity->vacancies ?? 'XX'}}/{{$activity->vacancies_filled ?? 'XX'}}</h3>
                                    </header>
                                    <div>
                                        <form action="{{ route('destroy-activity', [$activity->id]) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger link">DELETAR</button>
                                        </form>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection