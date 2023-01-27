@extends('DASHBOARD.ADMINISTRADOR.plantilla')


@section('content')
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Felicitaciones {{Auth::user()->name}} 🎉</h5>
                        <p class="mb-4">
                            Gracias por afiliarte a nuestra fuerza de ventas, con nuestros metodos y afiliaciones, lograras ganancias por encima del mercado laboral.

                        </p>

                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{asset('resources/DASHBOARD/assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="{{asset('resources/DASHBOARD/assets/img/illustrations/man-with-laptop-dark.png')}}" data-app-light-img="{{asset('resources/DASHBOARD/assets/img/illustrations/man-with-laptop-light.png')}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-4 order-1">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{asset('resources/DASHBOARD/assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">N° Usuarios</span>
                        <h3 class="card-title mb-2"> {{$data2[0]->total -1 }} Usuarios</h3> </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{asset('resources/DASHBOARD/assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded" />
                            </div>
                        </div>
                        <span>Ventas Cerradas</span>
                        <h3 class="card-title text-nowrap mb-1">{{$data1[0]->ventasCerradas}} Completadas</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-6 order-1">
        <div class="row">
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{asset('resources/DASHBOARD/assets/img/icons/unicons/paypal.png')}}" alt="Credit Card" class="rounded" />
                            </div>

                        </div>
                        <span class="d-block mb-1">Pasivo</span>
                        <h3 class="card-title text-nowrap mb-2">S/. {{$data1[0]->pasivo}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{asset('resources/DASHBOARD/assets/img/icons/unicons/cc-primary.png')}}" alt="Credit Card" class="rounded" />
                            </div>

                        </div>
                        <span class="fw-semibold d-block mb-1">Ventas Por Cerrar</span>
                        <h3 class="card-title mb-2">{{$data2[0]->total - $data1[0]->ventasCerradas -1}} Usuarios</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection