@php
use Carbon\Carbon; 
@endphp
@extends ('Frontend.layouts.layout')

@section('contenido')


<!-- Home -->
<div class="clearfix"></div>
<section class="banner-wrap">
    <div class="banner">

        <div class="col-lg-4" style="padding-top: 9%;">
            <div class="class=search-form margin-top-20 padding-vertical-20"  >
                <form class="form-signin inventory-heading efficiency-rating text-center padding-vertical-15 margin-bottom-40 ">
                    <h2 style="text-align: center;" ><b>Filtro de Búsqueda</b></h2>
                    <br>
                    <select class="form-control">
                        <option>Elige un tipo de coche</option>
                        @foreach($tipos as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->descripcion}}</option>
                          @endforeach
                      </select>

                      <select class="form-control">
                        <option>Elige una marca</option>
                          @foreach($marcas as $marca)
                            <option value="{{$marca->id}}">{{$marca->descripcion}}</option>
                          @endforeach
                      </select>

                      <select class="form-control">
                        <option>Elige un modelo</option>
                            @foreach($modelos as $modelo)
                             <option value="{{$modelo->id}}">{{$modelo->descripcion}}</option>
                            @endforeach
                      </select>
                    
                    <button class="lg-button btn-block" type="submit">Buscar</button>
                    <br>
                    <h5 style="text-align: center;" >Ver todas las <a href="{{route('registro')}}"><b>Ofertas</b></h5>
                </form>
            </div>
        </div>

        <div id=" carousel-example-generic" class=" col-lg-8 carousel slide" data-ride="carousel">
            <!-- Indicators -->
             <ol class="carousel-indicators">
               @foreach( $sliders as $slider )
                  <li data-target="#carouselExampleControls" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
               @endforeach
              </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
            @foreach( $sliders as $slider )
              <div class="item item {{ $loop->first ? 'active' : '' }}  carrousel" style="background-image: url('/images/sliders/{{$slider->url_imagen}}') ">
                <div class="carousel-caption">
                    <h2 class="a">{{ $slider->titulo }}</h2>
                    <p>  {!! $slider->contenido !!}</p>
                </div>
              </div>
            @endforeach    
            </div>
          
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>


<section class="content">
    <div class="container">

            <div class="row generate_new">
                <div class="inventory_box car_listings boxed boxed_full row">
                        <h4 class="margin-bottom-25 margin-top-none" style="color: #EC4B25;"><strong>DESTACADOS</strong> </h4>
                         @foreach( $vehiculos as $vehiculo )
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="inventory clearfix margin-bottom-20 styled_input has-photoswipe"> 
                            <input type="checkbox" class="checkbox compare_vehicle" id="vehicle_387" data-id="387"> 
                            <label for="vehicle_387"></label> 
                           <?php  $anio=Carbon::parse($vehiculo->fecha_matriculacion); ?>
                            <a class="inventory" href="{{url('categorias/listado/detalle/'.$vehiculo->id)}}">
                                <div class="title">{{$vehiculo->marca}} {{$vehiculo->modelo}} {{$anio->year}}</div> 
                                <img src="{{ url('/images/galeria/'.$vehiculo->img) }}"  class="preview" alt="preview" width="200" height="150" data-gallery-images="[{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-1.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-2.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-3.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-4.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-5.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-6.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-7.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-8.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-9.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-10.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-11.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-12.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-13.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-14.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-15.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-16.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-17.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-18.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800}]" data-pswp-uid="1">
                                    <div class="clearfix"></div> 
                                </a>
                                <div class="price"> 
                                    <div class="figure"> $43,995</div>
                                </div> 
                            </div>
                        </div>
                    @endforeach
                        

                                        

                </div>

        <div class="inner-page homepage margin-bottom-none">
            
            
            <!--car-block-wrap ends-->
            <div class="row parallax_parent design_2 margin-bottom-40 margin-top-30" style="height: 385px;">
                <div class="parallax_scroll clearfix" data-velocity="-.5" data-offset="-200" data-image="images/parallax1.jpg" style="background-image: url(&quot;{{asset('images/parallax1.jpg')}}&quot;); background-position: 50% -237px;">
                    <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-left-none xs-margin-bottom-none xs-padding-top-30 scroll_effect bounceInLeft" 
                                style="visibility: visible; animation-name: bounceInLeft;"> 
                                <span class="align-center">
                                    <i class="fas fa-car"></i>
                                </span>
                                    <h3>Pymes y Autónomos</h3>
                                    <p>La forma más fácil de tener tu coche de empresa.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 xs-margin-bottom-none xs-padding-top-30 scroll_effect bounceInLeft" 
                                data-wow-delay=".2s" 
                                style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInLeft;"> 
                                <span class="align-center">
                                    <i class="fas fa-building"></i>
                                </span>
                                    <h3>Medianas y Grandes Empresas</h3>
                                    <p>Externalización de gestión de flota.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 xs-margin-bottom-none xs-padding-top-30 scroll_effect bounceInRight" 
                                data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInRight;"> 
                                <span class="align-center">
                                    <i class="fas fa-binoculars"></i>
                                </span>
                                    <h3>Sobre 123Coches</h3>
                                    <p>Conócenos más.</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 xs-margin-bottom-none xs-padding-top-30 padding-right-none scroll_effect bounceInRight" 
                                style="visibility: visible; animation-name: bounceInRight;"> 
                                <span class="align-center">
                                    <i class="fas fa-phone"></i>
                                </span>
                                    <h3>900 90 65 14</h3>
                                    <p>Solicita tu presupuesto aquí.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="car-block-wrap padding-bottom-40">
                    <div class="container">
                        <div class="row">
                         @foreach( $noticias as $noticia )
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                                <div class=" margin-bottom-30">
                                    <div class="card">
                                        <div class="face front"><img class="img-responsive" src="{{ url('/images/noticias/'.$noticia->url_imagen) }}" alt=""></div>
                                    </div>
                                </div>
                                <h4><a href="{{url('noticia/'.$noticia->id)}}">{!! $noticia->titulo!!}</a></h4>
                                <p class="margin-bottom-none">{!! $noticia->resumen!!}</p>
                            </div>
                       @endforeach
                        </div>
                    </div>
                </section>
            
            <!--nosotros-->
            <section class="welcome-wrap padding-top-30 sm-horizontal-15">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h4 class="margin-bottom-25 margin-top-none"><strong>NOSOTROS</strong> </h4>
                        <p>Lorem ipsum dolor sit amet, falli tollit cetero te eos. Ea ullum liber aperiri mi, impetus
                            ate philosophia ad duo, quem regione ne ius. Vis quis lobortis dissentias ex, in du aft 
                            philosophia, malis necessitatibus no mei. Volumus sensibus qui ex, eum duis doming 
                            ad. Modo liberavisse eu mel, no viris prompta sit. Pro labore sadipscing et. Ne peax
                            egat usu te mel <span class="alternate-font">vivendo scriptorem</span>. Pro labore sadipscing et. Ne pertinax egat usu te 
                            mel vivendo scriptorem.</p>
                        <p>Cum ut tractatos imperdiet, no tamquam facilisi qui. Eum tibique consectetuer in, an 
                            referrentur vis, vocent deseruisse ex mel. Sed te <span class="alternate-font">idque graecis</span>. Vel ne libris dolores, 
                            mel graece mel vivendo scriptorem dolorum.</p>
                    </div>
                    <!--welcome ends-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-right-none sm-padding-left-none md-padding-left-15 xs-padding-left-none padding-bottom-40 scroll_effect fadeInUp" data-wow-delay=".2s" style="z-index: 100; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" style="width: 100%; height: 50%;" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!--invetory ends--> 
                </div>
                
                
            </section>

            <section class="message-wrap">
                <div class="container">
                    <div class="text-center d-flex justify-content-center py-5">
                    
                        <h2 class="col-lg-12 col-md-8 col-sm-12 col-xs-12 align-center margin-bottom-25 " style="text-align: center !important;">Suscríbete a nuestro <span class="alternate-font">Newsletter</span></h2>
                
                        <div class="contact_wrapper information_head">
                            <div class="form_contact margin-bottom-20">
                                <div id="result"></div>
                                <fieldset id="contact_form">
                                    <input type="email" name="email" class="form-control margin-bottom-25 input-lg" placeholder="Tu correo electrónico...)">
                                    <input id="submit_btn" type="submit" value="Suscribirse">
                                </fieldset>
                            </div>
                        </div>                        
                    </div>
                </div>
            <div class="message-shadow"></div>
                </section>
                
 
    <div class="row parallax_parent margin-top-30" style="height: 278px;">
            <div class="parallax_scroll clearfix" data-velocity="-.5" data-offset="-300" data-no-repeat="true" data-image="{{asset('images/parallax2')}}.jpg" style="background-image: url(&quot;{{asset('images/parallax2.jpg')}}&quot;); background-position: 50% -315px;">
                <div class="overlay">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col">
                                <div class=" text-center">
                                    <br>
                                    <h2>Lo que nuestros clientes dicen</h2>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div id="carousel-example-generic" class="carousel col-12 slide mt-5" data-ride="carousel">
                                <div class="carousel-inner">
                             @foreach($comentarios as $comentario)

                                    <div class="item {{ $loop->first ? 'active' : '' }}">
                                        <div class="owl-item" >
                                            <div class="col-12">
                                                <div class="d-flex justify-content-center ">
                                                    <img class="img-circle "  src="{{ url('/images/comentarios/'.$comentario->url_imagen) }}" alt="" width="140" height="140">
                                
                                                    <div class="number" >
                                                        <em><h5>{!! $comentario->contenido !!}</h5></em>
                                                        <br> 
                                                        <h6> <b>{{ $comentario->nombre }} / {{ $comentario->procedencia }}</b></h6>
                                                        <br> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br><br><br><br>

        <div class="message-shadow"></div>
        <div class="clearfix"></div>
        <section class="content">
            <div class="container">
                <div class="inner-page">
                    <div class="col-md-12 padding-none"> 
                        <!--MAP-->
                        <div class="find_map row clearfix">
                            <h2 class="margin-bottom-25 margin-top-none">ENCUÉNTRANOS</h2>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15691.765829240145!2d-66.9451892!3d10.505277346005187!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1548898108972" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <!--MAP--> 
                        <!--CONTACT INFORMATION-->
                        <div class="row contacts margin-top-25"> 
                            <!--LEFT INFORMATION-->
                            <div class="col-md-6 left-information">
                                <div class="contact_information information_head clearfix">
                                    <h3 class="margin-bottom-25 margin-top-none">INFORMACIÓN DE CONTACTO</h3>
                                    <div class="address clearfix margin-right-25 ">
                                        <div class="icon_address">
                                            <p><i class="fas fa-map-marker-alt"></i><strong>Dirección:</strong></p>
                                        </div>
                                        <div class="contact_address">
                                            <p class="margin-bottom-none">{{$direccion}}</p>
                                        </div>
                                    </div>
                                    <div class="address clearfix address_details margin-right-25 ">
                                        <ul class="margin-bottom-none">
                                            @isset($telefono)
                                            <li><i class="fas fa-phone"></i><strong>Teléfono:</strong> <span> {{$telefono}}</span></li>
                                            @endisset
                                            @isset($email)
                                            <li><i class="fas fa-envelope"></i><strong>Correo:</strong> <a href="mailto:sales@company.com">{{$email}}</a></li>
                                            @endisset
                                            @isset($web)
                                            <li class="padding-bottom-none"><i class="fas fa-laptop"></i><strong>Web:</strong> <a href="http://company.com">{{$web}}</a></li>
                                            @endisset
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--LEFT INFORMATION--> 
                            
                            <!--RIGHT INFORMATION-->
                           <div class="col-md-5 col-lg-offset-1 col-md-offset-1 padding-right-none xs-padding-left-none sm-padding-left-none xs-margin-top-30">
                                <div class="contact_wrapper information_head">
                                    <h3 class="margin-bottom-25 margin-top-none">CONTÁCTANOS</h3>
                                    <div class="form_contact margin-bottom-20">
                                        <div id="result"></div>
                                        <fieldset id="contact_form">
                                            <div style="display: none" class="alert-top fixed-top col-12  text-center alert  alert-success" id="estado"> {{ session('estado') }}</div>     
                                                                                                              
                                        <form method="POST" action="enviar" class="contact-form"  role="form" id="form-contacto">
                                            {{ csrf_field() }}
                                            <input id="nombre" type="text" name="nombre"  class="form-control margin-bottom-25"  placeholder="Nombre">
                                            <p class="text-danger" id='error_nombre'>{{$errors->first('nombre')}}</p>
                                           
                                            <input type="email" id="email" name="email" class="form-control margin-bottom-25" placeholder="Correo Electrónico" >
                                            <p class="text-danger" id='error_email'>{{$errors->first('email')}}</p>
                                            
                                            <textarea  id="mensaje"  name="mensaje" class="form-control margin-bottom-25 contact_textarea" placeholder="Tu mensaje" rows="7"  data-error="Por favor incluye un mensaje."></textarea>
                                            <p class="text-danger" id='error_mensaje'>{{$errors->first('mensaje')}}</p>
                                            <input id="btn-contacto" type="submit" value="Enviar Mensaje">
                                        </form>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <!--RIGHT INFORMATION--> 
                            
                        </div>
                        <!---CONTACT INFORMATION--> 
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--container ends--> 
        </section>
        </div>
    </div>
</section>

@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});



    $('#form-contacto').submit(function(e) {
   e.preventDefault();
            $("#nombre").css("border", "none");
            $("#email").css("border", "none");
            $("#mensaje").css("border", "none");
            var nombre    = $('input#nombre').val();
            var email    = $('input#email').val();
            var mensaje = $('textarea#mensaje').val();

            $.ajaxSetup({
                    headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "post",
                    url: '{{ route('send_mail') }}',
                    dataType: "json",
                    data: { nombre: nombre,email: email ,mensaje: mensaje,_token: '{{csrf_token()}}' },
                    success: function (data){
                    //console.log(data);   
                         if($.isEmptyObject(data.error)){
                            $("#estado").css("display","block");
                            $("#estado").html(data.success);
                            $("#estado").fadeIn( 300 ).delay( 1500 ).fadeOut( 1500 );
                            $("#form-contacto").trigger("reset");

                          }else{
                                                   
                            $.each( data.error, function( key, value ) {
                                $("#"+key).css("border", "1px solid").css("border-color", "#FC8496");
                                $("#error_"+key).html(value);
                                $("#error_"+key).fadeIn( 300 ).delay( 1500 ).fadeOut( 1500 );
                              });
                          }
                     /*   if (data == 1) {
                            $(".loading").addClass('d-none');
                            $("#btn-contacto").removeClass('d-none');

                          $("#alert").css("display","block");
                          $("#alert").fadeIn( 300 ).delay( 1500 ).fadeOut( 1500 );

                        }else{

                            //$('.respuesta-contacto').html('El mensaje no pudo ser enviado, intente nuevamente').css('color', 'red');

                        }   */                   

                    }

                });

        });

    
</script>

@endpush