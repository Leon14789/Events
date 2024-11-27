@extends('layouts.administrativeLayout')
@section('title', 'Painel Adminitrativo')

@section('content')
<!-- Main Wrapper -->
<div id="main-wrapper">
    <div class="wrapper style3">
        <div class="inner">
            <div class="container">
            @include('components.notify')
                <div class="row">
                    <div class="col-12 col-12-medium">
                        <a href="{{ route('create-event') }}" class="link">
                            <h2 class="icon fa-file-alt text-center">CRIAR NOVO EVENTO</h2>
                        </a>
                        <!-- Article list -->
                        <section class="box article-list">

                            <!-- Excerpt -->
                            @foreach($events as $event)
                            <article class="box excerpt">
                                <a href="{{ route('list-activities', [$event->id]) }}" class="image left">
                                <img src="{{ $event->image ? asset('storage/' . $event->image) : '/assets/images/pic04.png' }}" alt="{{ $event->name }}" />
                                </a>
                                <div class="event-container">
                                    <header>
                                        <span class="date">Data do Evento: {{ $event->date }} </span>
                                        <h3><a href="{{ route('list-activities', [$event->id]) }}">{{ $event->name }}</a></h3>
                                    </header>
                                    <div>
                                        <form action="{{ route('destroy-event', [$event->id]) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger link">DELETAR</button>
                                        </form>
                                        <button type="submit" class="btn btn-warning text-white">ENCERRAR</button>
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