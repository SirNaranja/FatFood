<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class SaladController extends Controller
{
    /**
     * Return the view with the object of the db
     *
     * @return void
     */
    public function index()
    {
        $salads=Menu::where('section','salads')->get();
        if($salads){
            return view('menu.salads.index',[
                'salads'=>$salads
            ]);
        }else{
            return view('menu.salads.index',[
                'salads'
            ]);
        }

    }
}
