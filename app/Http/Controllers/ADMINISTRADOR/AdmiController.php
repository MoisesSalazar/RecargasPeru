<?php

namespace App\Http\Controllers\ADMINISTRADOR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProduct;
use Illuminate\Support\Facades\DB;

class AdmiController extends Controller
{
    public function index(){
        $data1 = DB::select('select count(*) as ventasCerradas, sum(up.price) as pasivo FROM user_products as up WHERE up.price != 0');
        $data2 = DB::select('select count(*) as total FROM user_products');
        return view('DASHBOARD.ADMINISTRADOR.index',['data1'=> $data1, 'data2'=> $data2]);
    }
    public function registro(){
        $users = User::all();
        return view('DASHBOARD.ADMINISTRADOR.registro',['users' => $users]);
    }
    public function ventaCerrada(){
        $userProducts = UserProduct::all();
        $users = User::all();
        return view('DASHBOARD.ADMINISTRADOR.ventacerrada',['users' => $users, 'userProducts' => $userProducts]);
    }
    public function ventaActivar(){
        $users = User::all();
        $userProducts = UserProduct::all();
        return view('DASHBOARD.ADMINISTRADOR.ventaactivar',['users' => $users, 'userProducts' => $userProducts]);
    }
    public function registroDelete(request $request){
        $user = User::find($request->id);
        $userProduct = UserProduct::where('id_user','=',$user->id)->firstOrFail();
        
        $userProduct->delete();
        $user->delete();
        
        return redirect()->back();
    }
    public function ventaActivarA(request $request){
        $user = User::find($request->id);
        $userProduct = UserProduct::where('id_user','=',$user->id)->firstOrFail();
        $userProduct->price = $request->price;
        $userProduct->save();
        $user->status = 'Activado';
        $user->save();

        return redirect()->back();
    }
}