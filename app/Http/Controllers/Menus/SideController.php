<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class SideController extends Controller
{
    /**
     * Return the view with the object of the db
     *
     * @return void
     */
    public function index()
    {
        $sides=Menu::where('section','sides')->get();
        if($sides){
            return view('menu.sides.index',[
                'sides'=>$sides
            ]);
        }else{
            return view('menu.sides.index',[
                'sides'
            ]);
        }

    }
}
