<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProduct;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }
    public function registerSubmit(request $request)
    {
        $rules = ([
            'email' => 'unique:users|email',
        ]);

        $messages = [
            'email.unique' => 'El email ya ha sido registrado.',
        ];

        $this->validate($request, $rules, $messages);
        
        $newUsuario = new User();
        $newUsuario->name = $request->name;
        $newUsuario->last_name = $request->last_name;
        $newUsuario->email = $request->email;
        $newUsuario->email_verified_at = now();
        $newUsuario->password = Hash::make($request->password);
        $newUsuario->pass = $request->password;
        $newUsuario->phone = $request->phone;
        $newUsuario->doi = $request->doi;
        $newUsuario->bank_name = $request->bank_name;
        $newUsuario->bank_account = $request->bank_account;
        $newUsuario->type_user = "CLIENTE";
        $newUsuario->remember_token = Str::random(10);

        $newUsuario->save();

        $newUserProduct = new UserProduct();
        $newUserProduct->id_user = $newUsuario->id;
        $newUserProduct->id_product = $request->producto;
        $newUserProduct->price = 0;

        $newUserProduct->save();

        return redirect()->route('login');
    }
}
