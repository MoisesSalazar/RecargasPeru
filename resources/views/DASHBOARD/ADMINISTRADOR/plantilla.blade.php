@extends('DASHBOARD.plantilla')
@section('navbar')
<!-- Forms & Tables -->
<li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
<!-- Forms -->


<li class="menu-item">
    <a href="{{route('registro')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-table"></i>
        <div data-i18n="Tables">Historial de Registros</div>
    </a>
</li>
<li class="menu-item">
    <a href="{{route('ventaActivar')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-table"></i>
        <div data-i18n="Tables">Ventas por Activar</div>
    </a>
</li>
<li class="menu-item">
    <a href="{{route('ventaCerrada')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-table"></i>
        <div data-i18n="Tables">Ventas Cerradas</div>
    </a>
</li>

@endsection