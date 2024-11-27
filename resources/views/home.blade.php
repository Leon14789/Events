@extends('layouts.baseLayout')
@section('title', 'Home')
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
                            <h2 class="icon fa-file-alt">ULTIMOS EVENTOS</h2>

                             <!-- Excerpt -->
                             @foreach($events as $event)
                            <article class="box excerpt d-flex">
                                <a href="{{ route('available-activities', [$event->id]) }}" class="image left">
                                <img  src="{{ $event->image ? asset('storage/' . $event->image) : '/assets/images/pic04.png' }}" alt="{{ $event->name }}" />

                                <div class="event-container">
                                    <header>
                                        <span class="date">Data do Evento: {{ $event->date }} </span>
                                        <h3><a href="{{ route('available-activities', [$event->id]) }}">{{ $event->name }}</a></h3>
                                    </header>
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