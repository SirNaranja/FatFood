<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class DrinkController extends Controller
{
    /**
     * Return the view with the object of the db
     *
     * @return void
     */
    public function index()
    {
        $drinks=Menu::where('section','drinks')->get();
        if($drinks){
            return view('menu.drinks.index',[
                'drinks'=>$drinks
            ]);
        }else{
            return view('menu.drinks.index',[
                'drinks'
            ]);
        }

    }
}
