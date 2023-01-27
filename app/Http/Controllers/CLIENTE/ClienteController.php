<?php

namespace App\Http\Controllers\CLIENTE;

use App\Http\Controllers\Controller;
use App\Models\UserProduct;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $userProduct = UserProduct::where('id_user','=',Auth::user()->id)->firstOrFail();
        return view('DASHBOARD.CLIENTE.index',['userProduct' => $userProduct]);
    }
}
