<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos=Cart::where('user_id',Auth::user()->id)->get();
        if($pedidos){
            return view('profile.index',[
                'orders'=>$pedidos,
                'user'=>Auth::user()
            ]);
        }else{
            return view('profile.index',[
            ]);
        }
    }
}
