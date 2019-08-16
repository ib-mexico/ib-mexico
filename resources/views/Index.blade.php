@extends('components.Main-index')

@section('pagina', 'Inicio')

@section('body')
    @include('components.Carousel')

    <section>
        <h1 class="text-center mb-5 mt-5 pt-5 font-weight-bold dark-grey-text wow fadeIn">Marcas</h1>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                    <div class="card hoverable col">
                        <img src="{{ asset('img/marcas/marcas1.png') }}" alt="" class="img-fluid">     
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                    <div class="card hoverable col">
                        <img src="{{ asset('img/marcas/marcas2.png') }}" alt="" class="img-fluid">     
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                    <div class="card hoverable col">
                        <img src="{{ asset('img/marcas/marcas3.png') }}" alt="" class="img-fluid">     
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                    <div class="card hoverable col">
                        <img src="{{ asset('img/marcas/marcas4.png') }}" alt="" class="img-fluid">     
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                    <div class="card hoverable col">
                        <img src="{{ asset('img/marcas/marcas5.png') }}" alt="" class="img-fluid">     
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                    <div class="card hoverable col">
                        <img src="{{ asset('img/marcas/marcas6.png') }}" alt="" class="img-fluid">     
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                    <div class="card hoverable col">
                        <img src="{{ asset('img/marcas/marcas7.png') }}" alt="" class="img-fluid">     
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                    <div class="card hoverable col">
                        <img src="{{ asset('img/marcas/marcas8.png') }}" alt="" class="img-fluid">     
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection