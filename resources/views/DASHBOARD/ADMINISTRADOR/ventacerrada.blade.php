@extends('DASHBOARD.ADMINISTRADOR.plantilla')


@section('content')
<div class="card">
    <h5 class="card-header">Ventas Cerradas</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Celular</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($users as $user)
                    @if($user->status == 'Activado')
                    <tr>
                        <td>CODIGO {{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->doi}}</td>
                        <td><span class="badge bg-label-primary me-1">Activado</span></td>
                        <td>
                        <button type="button" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#modal-activar-{{$user->id}}">Ver Detalle</button>
                        </td>
                    </tr>
                    @include('DASHBOARD.ADMINISTRADOR.modal-activar')
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection