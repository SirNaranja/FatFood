<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class BurgerController extends Controller
{
    /**
     * Return the view with the object of the db
     *
     * @return void
     */
    public function index()
    {

        $burgers=Menu::where('section','burgers')->get();
        if($burgers){
            return view('menu.burgers.index',[
                'burgers'=>$burgers
            ]);
        }else{
            return view('menu.burgers.index',[
            ]);
        }



    }



}
