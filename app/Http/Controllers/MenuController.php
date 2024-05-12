<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('gmenu.index',[
            'menus'=>Menu::all(),

         ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Menu $item)
    {
        $this->authorize('create',$item);
        $validated=$request->validate([
            'name'=>'required|string|max:50',
            'ingredientes'=>'required|string|max:255',
            'section'=>'required|string|max:50',
            'allergens'=>'boolean',
            'price'=>'required|numeric',
            'url'=>'required|string|max:255'

        ]);
        $menu=new Menu;
        $menu->name=$validated['name'];
        $menu->ingredientes=$validated['ingredientes'];
        $menu->section=$validated['section'];
        if (isset($validated['allergens'])) {
            $menu->allergens = true;
        } else {
            $menu->allergens = false;
        }
        $menu->price=$validated['price'];
        $menu->url=$validated['url'];
        $menu->save();

        return redirect('/menu');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('gmenu.editmenu', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $item)
    {
        $this->authorize('update', $item);
        $id=$request->id;
        $menu=Menu::findOrFail($id);


        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'ingredientes' => 'required|string|max:255',
            'section' => 'required|string|max:50',
            'allergens' => 'boolean',
            'price' => 'required|numeric',
            'url' => 'required|string|max:255'
        ]);
        $menu->name = $validatedData['name'];

        $menu->ingredientes = $validatedData['ingredientes'];
        $menu->section = $validatedData['section'];
        $menu->allergens = isset($validatedData['allergens']) ? true : false;
        $menu->price = $validatedData['price'];
        $menu->url = $validatedData['url'];
        $menu->save();

        return redirect(route('menu.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Menu $item)
    {
        $this->authorize('delete', $item);
        $id=$request->id;
        $menu=Menu::findOrFail($id);
        if ($menu) {
            $menu->delete();
        }
        return redirect('/menu');
    }

}
