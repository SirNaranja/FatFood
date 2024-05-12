<?php

namespace App\Http\Controllers\Menus;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllergenController extends Controller
{
    /**
     * Return the view with the object of the db
     *
     * @return void
     */
    public function index()
    {
        $allergens=Menu::where('allergens',false)->get();
        if($allergens){
            return view('menu.allergen.index',[
                'allergens'=>$allergens
            ]);
        }else{
            return view('menu.allergen.index',[
            ]);
        }
    }
}
