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
                            <article class="box excerpt">
                                <a href="#" class="image left"><img src="/assets/images/pic04.jpg" alt="" /></a>
                                <div>
                                    <header>
                                        <span class="date">DATA DO EVENTO</span>
                                        <h3><a href="#">TITULO DO EVENTO</a></h3>
                                    </header>
                                    <p>
                                        DESCRIÇÃO DO EVENTO
                                    </p>
                                </div>
                            </article>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Launch demo modal
                            </button>
                            <x-modal-confirm />
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection