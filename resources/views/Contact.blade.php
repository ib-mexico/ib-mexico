@extends('components.Main')

@section('seccion', 'Contáctanos')

@section('body')
    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4 mb-5">
                    <div class="row">
                        <p class="grey-text col">
                            Ponte en contacto con nosotros y en breve nos comunicaremos contigo con 
                            el fin de proporcionarte la mejor experiencia con nosotros.
                        </p>
                    </div>
                    <div class="row mb-5 mt-5 text-center text-lg-left">
                        <div class="col-lg-2">
                            <i class="fas fa-phone red-text fa-2x"></i>
                        </div>
                        <div class="col-lg-10">
                            <span class="grey-text" style="line-height: 40px">+52 (993)351-1916</span>
                        </div>
                    </div>
                    <div class="row mb-5 text-center text-lg-left">
                        <div class="col-lg-2">
                            <i class="fas fa-envelope red-text fa-2x"></i>
                        </div>
                        <div class="col-lg-10">
                            <span class="grey-text" style="line-height: 30px">ventas@ib-mexico.com</span>
                        </div>
                    </div>
                    <div class="row text-center text-lg-left">
                        <div class="col-lg-2">
                            <i class="fas fa-map-marker-alt red-text fa-2x mt-1"></i>
                        </div>
                        <div class="col-lg-10">
                            <span class="grey-text">Marcelino Cabieses #407, Villahermosa, Tab.</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <form id="msjContact" action="{{ Route('form.menssaje') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="nombre">Nombre: </label>
                                <input type="text" id="nombre" name="inpNombre" class="form-control" required autocomplete="off">
                            </div>
                            <div class="col-lg-6 col-md-12 form-group">
                                <label for="mail">E-mail: </label>
                                <input type="email" id="mail" name="inpMail" class="form-control validate" required autocomplete="off">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="mensaje">Mensaje: </label>
                                    <textarea class="form-control" id="mensaje" name="txtMensaje" rows="5" required autocomplete="off"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="btnSubmit" class="btn btn-white font-weight-bold red-text">Enviar</button>
                    </form>
                </div>
            </div>  
        </div>
    </section>
@endsection

@section('js')

    <script src="{{ asset('js/contact.js') }}" type="text/javascript"></script>
@endsection