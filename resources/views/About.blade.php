@extends('components.Main')

@section('body')

    @section('seccion', 'Nosotros')

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h5 class="font-weight-bold title">Antecedentes</h5>
                    <p class="grey-text">
                        Se inician labores en Diciembre de 2008, comercializando productos y servicios de telecomunicaciones.
                            Hoy 10 años despues, incursionando en el mercado como integradores especializados en telecomunicaciones 
                            con alianzas con los principales fabricantes como son: Panasonic, Fortinet, Total Ground, entre otros.
                    </p>
                    <br>
                    <h5 class="font-weight-bold title">Equipo de trabajo</h5>
                    <p class="grey-text">
                        Se inician labores en Diciembre de 2008, comercializando productos y servicios de telecomunicaciones.
                            Hoy 10 años despues, incursionando en el mercado como integradores especializados en telecomunicaciones 
                            con alianzas con los principales fabricantes como son: Panasonic, Fortinet, Total Ground, entre otros.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('img/equipo.jpg') }}" class="img-fluid" alt="" style="border-radius: 5px;">
                </div>
            </div>
            
        </div>
    </section>
    <br><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card card-body text-center">
                        <div class="avatar mx-auto mt-3 mb-3">
                            <div class="icon-area">
                                <div class="circle-icon">
                                    <i class="fas fa-star z-depth-1"></i>
                                </div>
                            </div>
                        </div>
                        <h6 class="font-weight-bold title">Valores</h6>
                        <p class="font-small grey-text">Graphic designer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card card-body text-center">
                        <div class="avatar mx-auto mt-3 mb-3">
                            <div class="icon-area">
                                <div class="circle-icon">
                                    <i class="fas fa-dolly-flatbed z-depth-1"></i>
                                </div>
                            </div>                        </div>
                        <h6 class="font-weight-bold title">Productos de Calidad</h6>
                        <p class="font-small grey-text">Manejamos las mejores marcas</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card card-body text-center">
                        <div class="avatar mx-auto mt-3 mb-3">
                            <div class="icon-area">
                                <div class="circle-icon">
                                    <i class="fas fa-user-tie z-depth-1"></i>
                                </div>
                            </div>      
                        </div>
                        <h6 class="font-weight-bold title">Personal Certificado</h6>
                        <p class="font-small grey-text">Capacitados y Especializado</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card card-body text-center">
                        <div class="avatar mx-auto mt-3 mb-3">
                            <div class="icon-area">
                                <div class="circle-icon">
                                    <i class="fas fa-globe-americas z-depth-1"></i>
                                </div>
                            </div>                        </div>
                        <h6 class="font-weight-bold title">Cobetura</h6>
                        <p class="font-small grey-text">Centro-Sur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>
    <!-- Tabs Mision & Vision -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-2">
                        <ul class="nav md-pills pills-primary flex-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#mision" role="tab" aria-selected="true">
                                    <i class="fas fa-rocket fa-2x"></i><br>Misi&oacute;n
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#vision" role="tab" aria-selected="false">
                                    <i class="fas fa-bullseye fa-2x"></i><br>Visi&oacute;n
                                </a>
                            </li>
                        </ul>
                    </div>
        
                    <!--Tab panels-->
                    <div class="tab-content">
        
                        <!--Panel 1-->
                        <div class="tab-pane fade in active show" id="mision" role="tabpanel">
                            <br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-7 col-md-12 text-center">
                                    <p class="grey-text">
                                        Atender a empresas o particulares en sus necesidades relacionadas a las tecnolog&iacute;as de 
                                        la información proporcionando los mejores productos y soluciones integrales de valor agregado, 
                                        que les permitan administrar correctamente sus recursos haciendo rendir su inversión al m&aacute;ximo,
                                        y as&iacute; les permitan crecer y desarrollarse entendiendo que el &eacute;xito de ambos esta conjuntamente 
                                        relacionado.
                                    </p>
                                </div>
                            </div>        
                        </div>
                    
                        <!--Panel 2-->
                        <div class="tab-pane fade" id="vision" role="tabpanel">
                            <br>
                            <div class="row d-flex justify-content-center">
                            
                                <div class="col-lg-7 col-md-12 text-center">
                                    <p class="grey-text">
                                        Consolidar la presencia de la empresa en el mercado local y nacional como la
                                        m&aacute;s importante en calidad de servicios y productos; proporcionando soluciones
                                        integrales de valor agregado, considerando a cada uno de nuestros clientes
                                        como un socio estrat&eacute;gico, ya que el &eacute;xito de nuestra compañ&iacute;a ser&aacute; un reflejo
                                        del &eacute;xito de nuestros clientes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection