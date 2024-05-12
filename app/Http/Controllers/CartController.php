<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        $cartItems = [];

        foreach ($cart as $menuId => $quantity) {
            $menu = Menu::find($menuId);
            if ($menu) {
                $cartItems[] = [
                    'menu_id' => $menu->id,
                    'name' => $menu->name,
                    'price' => $menu->price,
                    'quantity' => $quantity,
                    'img'=>$menu->url
                ];
            }
        }
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        $request->session()->put('cartItems', $cartItems);
        return view('carrito.index', compact('cartItems', 'total'));
    }
    /**
     * Show the management index
     *
     * @param Request $request
     * @return void
     */
    public function gestion(Request $request)
    {
        return view('gcarrito.index',[
            'cart'=>Cart::all(),

         ]);
    }
    /**
     * Delete the object in the db
     *
     * @param Request $request
     * @return void
     */
    public function cancelar(Request $request)
    {

        $id=$request->id;
        $cart=Cart::findOrFail($id);
        if ($cart) {
            $cart->delete();
        }
        return redirect()->back();
    }

    /**
     * Add a new element to the cart.
     */
    public function add(Request $request,$id)
    {
        $menu=Menu::findOrFail($id);
        $cart = $request->session()->get('cart',[]);
        if (isset($cart[$id])) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }
   /**
    * Remove an item from the cart array
    *
    * @param Request $request
    * @param string $id
    * @return void
    */
    public function remove(Request $request,string $id)
    {
        $menu=Menu::findOrFail($id);
        $cart = $request->session()->get('cart',[]);
            if ($cart[$id]==1){
                unset($cart[$id]);
            }else{
                $cart[$id]--;
            }
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    /**
     * Remove an item from the cart
     *
     * @param Request $request
     * @param string $id
     * @return void
     */
    public function delete(Request $request,string $id)
    {
        $cart = collect($request->session()->get('cart', []));
        $cart->forget($id);
        $request->session()->put('cart', $cart->all());
        return redirect()->route('cart.index');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Cart $cart)
    {
        $this->authorize('create',$cart);
        $validated=$request->validate([
            'address'=>'required|string|max:50',
        ]);
        $cart=new Cart;
        $total=0;
        $orden="";
        $order = $request->session()->get('cartItems', []);
        foreach($order as $item){
            $orden.="Menu: ".$item['name'].", Precio ud: ".$item['price'].", Cantidad: ".$item['quantity'].";";
            $total += $item['price'] * $item['quantity'];
        }
        $cart->order=$orden;
        $cart->user_id=Auth::user()->id;
        $cart->address=$validated['address'];
        $cart->total=$total;
        $cart->payment=$request->payment;
        $cart->save();
        $cart = collect($request->session()->get('cart', []));
        $request->session()->forget('cart');
        return redirect(route('profile'));


    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('gcarrito.index',[
            'orders'=>Cart::all(),

         ]);
    }


}
