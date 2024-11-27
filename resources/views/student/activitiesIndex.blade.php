@extends('layouts.baseLayout')
@section('title', 'Lista de Atividades')

@section('content')
<!-- Main Wrapper -->
<div id="main-wrapper">
    <div class="wrapper style3">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-12-medium">
                        <h2 class="text-center">ATIVIDADES RELACIONADAS AO EVENTO: {{$event->name}}</h2>

                        <!-- Article list -->
                        <section class="box article-list">

                            <!-- Excerpt -->
                            @foreach($activities as $activity)
                            <article class="box excerpt">
                                @if($activity->vacancies_filled >= $activity->vacancies)
                                <div class="image left">
                                <img class="imagemActivity" src="{{ $activity->image ? asset('storage/' . $activity->image) : '/assets/images/Defalt.png' }}" alt="{{ $activity->name }}" />

                                </div>
                                <div class="event-container">
                                    <header>
                                        <span class="date">Dia:{{$activity->date ?? 'Dia não definido'}} às: {{$activity->hours ?? 'Horário não definido'}} </span>
                                        <h3> {{$activity->name ?? 'Nome não Definido'}} </h3>
                                        <h3 style="color: red; font-weight: bold;">Não há mais vagas</h3>
                                        <h3>Vagas:{{$activity->vacancies ?? 'XX'}}/{{$activity->vacancies_filled ?? 'XX'}}</h3>
                                    </header>
                                </div>
                                @else
                                <a href="{{ route('activity-details', [$activity->id]) }}" class="image left">
                                <img class="imagemActivity" src="{{ $activity->image ? asset('storage/' . $activity->image) : '/assets/images/Defalt.png' }}" alt="{{ $activity->name }}" />
                                </a>
                                <div class="event-container">
                                    <header>
                                        <span class="date">Dia:{{$activity->date ?? 'Dia não definido'}} às: {{$activity->hours ?? 'Horário não definido'}} </span>
                                        <h3><a href="{{ route('activity-details', [$activity->id]) }}">{{$activity->name ?? 'Nome não Definido'}}</a></h3>
                                        <h3>Vagas:{{$activity->vacancies ?? 'XX'}}/{{$activity->vacancies_filled ?? 'XX'}}</h3>
                                    </header>
                                </div>
                                @endif
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