@extends('DASHBOARD.plantilla')
@section('content')
@if($userProduct->price != 0)
    @if($userProduct->id_product ==1)
        @include('DASHBOARD.CLIENTE.visanet')
    @elseif($userProduct->id_product == 2)
        @include('DASHBOARD.CLIENTE.mastercard')
    @elseif($userProduct->id_product == 3)
        @include('DASHBOARD.CLIENTE.completo')
    @elseif($userProduct->id_product == 4)
        @include('DASHBOARD.CLIENTE.premium')
    @else
        @include('DASHBOARD.CLIENTE.default')
    @endif
@else
    @include('DASHBOARD.CLIENTE.default')
@endif
@endsection