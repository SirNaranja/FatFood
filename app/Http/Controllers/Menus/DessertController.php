<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;


class DessertController extends Controller
{
    /**
     * Return the view with the object of the db
     *
     * @return void
     */
    public function index()
    {
        $desserts=Menu::where('section','desserts')->get();
        if($desserts){
            return view('menu.desserts.index',[
                'desserts'=>$desserts
            ]);
        }else{
            return view('menu.desserts.index',[
                'desserts'
            ]);
        }

    }
}
