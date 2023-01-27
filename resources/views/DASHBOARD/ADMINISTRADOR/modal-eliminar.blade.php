<div class="modal fade" id="modal-eliminar-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h2>Eliminar Cliente</h2>
            </div>
            <form action="{{route('registro.delete')}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group d-flex justify-content-center">
                                <h3>
                                    {{$user->email}} <br>
                                    {{$user->name}} <br>
                                    {{$user->last_name}} <br>
                                    {{$user->doi}} 
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>