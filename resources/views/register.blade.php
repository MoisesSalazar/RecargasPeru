@extends('HOME.general')
@section('content')
<!-- Header -->

<!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end of preloader -->


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="{{route('welcome')}}"><img src="{{asset('resources/HOME/images/logo1.png')}}" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('welcome')}}">INICIO <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <span class="nav-item">
                <a class="btn-outline-sm" href="{{route('login')}}">Iniciar Sesión</a>
            </span>
        </div>
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->
<header id="header" class="ex-2-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Inscribirse</h1>
                <p>Complete el siguiente formulario para registrarse. ¿Ya te registraste? Entonces solo <a class="white" href="{{route('login')}}">Inicia Sesión</a></p>
                <!-- Sign Up Form -->
                <div class="form-container">
                    <form data-toggle="validator" data-focus="false" action="{{route('registerSubmit')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input name="email" type="email" class="form-control-input" required value="{{old('email')}} ">
                            <label class="label-control" for="semail">Email</label>
                            <div class="help-block with-errors"></div>
                            @error('email')
                            <div class="help-block with-errors">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="doi" type="text" class="form-control-input" id="sname" required value="{{old('doi')}}">
                            <label class="label-control" for="sname">DNI</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input name="name" type="text" class="form-control-input" id="sname" required value="{{old('name')}}">
                            <label class="label-control" for="sname">Nombres</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input name="last_name" type="text" class="form-control-input" id="sname" required value="{{old('last_name')}}">
                            <label class="label-control" for="sname">Apellidos</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input name="phone" type="text" class="form-control-input" id="sname" required value="{{old('phone')}}">
                            <label class="label-control" for="sname">Celular</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div>La contraseña debe ser mayor a 8 digitos y debe contener almenos 1 numero y letra</div>
                        <div class="form-group">
                            <input name="password" type="text" class="form-control-input" id="spassword" required>
                            <label class="label-control" for="spassword">Password</label>
                            <div class="help-block with-errors"></div>
                            
                        </div>

                        <div class="form-group">
                            <select name="producto" class="form-control" required>
                                <option selected="" disabled="" value="" class="">Selecciona Producto</option>
                                <option value = "1">Recargas VisaNet - S/.50.00</option>
                                <option value = "2">Recargas MasterCard - S/.50.00</option>
                                <option value = "3">Sistema Completo - (Recargas + Pago de Servicios de VisaNet) - S/.60.00</option>
                                <option value = "4">Sistema Completo + Recargas MasterCard - S/60.00</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div>Datos extras para el Sistema de visanet**</div>
                        <br>
                        <div class="form-group">
                            <select name="bank_name" class="form-control">
                                <option selected="" disabled="" value="" class="">Selecciona Banco</option>
                                <option>BANCO DE CREDITO -BCP</option>
                                <option>BBVA</option>
                                <option>INTERBANK</option>
                                <option>BANCO DE LA NACIÓN</option>
                                <option>MI BANCO</option>
                                <option>SCOTIABANK</option>
                                <option>CAJA SULLANA</option>
                                <option>CAJA AREQUIPA</option>
                                <option>CAJA HUANCAYO</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input name="bank_account" type="text" class="form-control-input" id="spassword">
                            <label class="label-control" for="spassword">Numero de Cuenta Bancaria</label>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group checkbox">
                            <input name="check" type="checkbox" id="sterms" value="Agreed-to-Terms" required>Estoy de acuerdo con la <a data-toggle="modal" data-target="#exampleModal" href="#">Términos y condiciones de protección de datos</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="form-control-submit-button">REGISTRARSE</button>
                        </div>
                        <div class="form-message">
                            <div id="smsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div> <!-- end of form container -->
                <!-- end of sign up form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TRATAMIENTO DE DATOS PARA FINES ADICIONALES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                Con tu autorización, SOLUCIONES Y SERVICIOS INTEGRADOS S.A.C., identificada con RUC N° 20602370497 y domiciliada en Av. José Pardo No 831, Miraflores, Lima, Lima; tratará tus datos personales y/o sensibles, los cuales se refieren a toda información que te identifica o te hace identificable (Ley N° 29733 y su Reglamento), como tus: nombres y apellidos, documento de identidad, estado civil, ocupación, nacionalidad, teléfono, correo electrónico, firma manuscrita o digital, imagen, voz, huella dactilar, rostro u otros datos biométricos, datos económicos, entre otros. Tus datos nos permiten cumplir las siguientes finalidades:

                Establecer y mantener contacto contigo por distintos medios (digitales y/o presenciales) para remitirte información sobre productos o servicios de tu interés, campañas especiales o beneficios exclusivos, empresas del grupo, subsidiarias, sucursales, socios comerciales y/o estratégicos tienen para ti. Puedes obtener mayor información sobre ellas consultando nuestra Política de Privacidad;

                Coadyuvar con la elaboración y/o hacerlo directamente, de perfiles financieros y/o crediticios, con el fin de remitirte información comercial personalizada sobre soluciones, productos o servicios, empresas del grupo, subsidiarias, sucursales, socios comerciales y/o estratégicos; Para cumplir con esta finalidad, se podrá utilizar la información transaccional del cliente;

                Realizar encuestas con la finalidad de mejorar nuestros servicios;

                Realizar reportes de ventas y marketing;

                Realizar prospecciones de mercado; y,

                Demás actividades asociadas al cumplimiento de dichas finalidades, las cuales podrán realizarse directamente por Nosotros o por terceros.

                Almacenaremos tu información en bancos de datos de titularidad, los cuales se encuentran debidamente registrados en el Registro Nacional de Protección de Datos Personales, de acuerdo con lo exigido por la Ley N° 29733 y su Reglamento. Si aún no tienes una relación contractual o comercial con nosotros, tus datos podrán ser incluidos en el banco de datos denominado “Usuarios Web” o “Prospectos de Clientes”; sin embargo, si te encuentras afiliado a nuestros servicios o anteriormente has adquirido nuestros productos, tus datos personales se encontrarán almacenados en el banco de datos de “Clientes”. Tus datos personales serán tratados por el tiempo necesario para cumplir con las finalidades listadas anteriormente; sin embargo, en mérito de disposiciones regulatorias, podremos conservar tu información luego de culminada la relación comercial, estableciendo en dicho caso, un periodo máximo de conservación de 10 años posterior al término de la misma. Podrás en todo momento revocar el consentimiento otorgado expresamente, tanto como limitar el uso o divulgación de tus datos personales. Para ello, como titular de tus datos personales podrás comunicarte, a través de nuestro canal telefónico: Lima: 903156064 Por otro lado, como titular de tus datos personales, tienes el derecho de acceder a tus datos; conocer las características de su tratamiento, rectificarlos en caso de ser inexactos o incompletos; solicitar sean suprimidos o cancelados al considerarlos innecesarios para las finalidades previamente expuestos o bien oponerse a su tratamiento para fines específicos. Para ello, podrás ejercer estos derechos ingresando al módulo de Derechos ARCO en la parte inferior de nuestra web y siguiendo los pasos allí descritos, enviando la documentación requerida a través de la siguiente casilla: Te informamos que podrá acceder a mayor información sobre el tratamiento de datos personales por parte ingresando a nuestra Política de Privacidad.

                Te informamos que podrá acceder a mayor información sobre el tratamiento de datos personales por parte ingresando a nuestra Política de Privacidad.
                Hacerte Recordar que no externo, ni devolcion de afiliacion.


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection