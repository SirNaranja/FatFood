<?php

namespace App\Http\Controllers\Api;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index()
    {
        $menu=Menu::all();
        if($menu)
        return response()->json([
            'success'=>true,
            'data'=>$menu
        ]);
        return response()->json([
            'success'=>false,
            'data'=>'No hay nada a la venta'
        ]);
    }
    public function store(Request $request)
    {
        $menu=new Menu;
        $menu->name=$request->name;
        $menu->ingredientes=$request->ingredientes;
        $menu->section=$request->section;
        $menu->allergens=$request->allergens;
        $menu->price=$request->price;
        $menu->url=$request->url;
        $menu->save();
        return response()->json([
            'success'=>true,
            'data'=>$menu
        ]);
    }
    public function update(Request $request,$id)
    {
        $menu=Menu::find($id);
        if($menu!=null){
            $menu->name=$request->name;
            $menu->ingredientes=$request->ingredientes;
            $menu->section=$request->section;
            $menu->allergens=$request->allergens;
            $menu->price=$request->price;
            $menu->url=$request->url;
            $menu->save();
            return response()->json([
                'success'=>true,
                'data'=>'Menu actualizado'
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'data'=>'Menu no actualizado'
            ]);
        }


    }
    public function destroy($id)
    {
        $menu=Menu::find($id);
        if($menu!=null){
            $menu->delete();
            return response()->json([
                'success'=>true,
                'data'=>'Menu eliminado'
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'data'=>'Menu no encontrado'
            ]);
        }
    }
    public function show($id)
    {
        $menu=Menu::find($id);
        if($menu){
            return response()->json([
                'success'=>true,
                'data'=>$menu
            ]);
        }
        return response()->json([
            'success'=>false,
            'data'=>'Menu not found'
        ]);
    }
}
