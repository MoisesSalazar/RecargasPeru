@extends('DASHBOARD.ADMINISTRADOR.plantilla')


@section('content')
<div class="card">
    <h5 class="card-header">Historial de Registros</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Celular</th>
                    <th>Estado</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($users as $user)
                <tr>
                    <td>CODIGO {{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->doi}}</td>
                    <td>{{$user->phone}}</td>
                    <td>
                        @if ($user->status == 'Activado')
                            <span class="badge bg-label-primary me-1">Activado</span>
                        @else
                            <span class="badge bg-label-danger me-1">Desactivado</span>
                        
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#modal-eliminar-{{$user->id}}">Eliminar</button>
                    </td>
                </tr>
                @include('DASHBOARD.ADMINISTRADOR.modal-eliminar')
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection