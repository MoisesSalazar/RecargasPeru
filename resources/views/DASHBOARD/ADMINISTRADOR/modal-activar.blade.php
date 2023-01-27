<div class="modal fade" id="modal-activar-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h2>Activar Cliente</h2>
            </div>
            <form action="{{route('ventaActivar.activar')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <h4>Correo: {{$user->email}}</h4>
                                <h4>Contraseña: {{$user->pass}}</h4>
                                <h4>Nombre: {{$user->name}}</h4>
                                <h4>Apellido: {{$user->last_name}}</h4>
                                <h4>Celular: {{$user->phone}}</h4>
                                <h4>DOI: {{$user->doi}}</h4>
                                <h4>Nombre Banco: {{$user->bank_name}}</h4>
                                <h4>Numero de Cuenta: {{$user->bank_account}}</h4>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            <select name="producto" class="form-control" required>
                                @foreach($userProducts as $userProduct)
                                    @if($userProduct->id_user == $user->id)
                                        <option selected=""  value = "{{$userProduct->id_product}}">
                                            @if($userProduct->id_product == 1)
                                                Recargas VisaNet - S/.30
                                            @elseif($userProduct->id_product == 2)
                                                Recargas MasterCard - S/.30
                                            @elseif($userProduct->id_product == 3)
                                                Sistema Completo - (Recargas VisaNet + Pago de Servicios) - S/.50
                                            @elseif($userProduct->id_product == 4)
                                                Sistema Completo + Recargas MasterCard - S/60
                                            @endif
                                        </option>
                                    @endif
                                @endforeach
                                <option value = "1">Recargas VisaNet - S/.30</option>
                                <option value = "2">Recargas MasterCard - S/.30</option>
                                <option value = "3">Sistema Completo - (Recargas VisaNet + Pago de Servicios) - S/.50</option>
                                <option value = "4">Sistema Completo + Recargas MasterCard - S/60</option>
                            </select>
                            <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="card-body">
                    <div class="form-floating">
                        <input name="price" type="number" placeholder="10.00" step="0.01" class="form-control" id="floatingInput" placeholder="John Doe" aria-describedby="floatingInputHelp" required>
                        <label for="floatingInput">Precio</label>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Activar</button>
                </div>
            </form>
        </div>
    </div>
</div>