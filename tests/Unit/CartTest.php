<?php

namespace Tests\Unit;

use App\Models\Cart;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CartTest extends TestCase
{
    use DatabaseTransactions;
    public function testMenuModelCanBeCreated()
    {
        $cart = new Cart([
            'user_id'=>1,
            'order' => 'Menu: Papas Deluxe, Precio ud: 4.99, Cantidad: 200',
            'address' => 'C/Maracuya',
            'payment' => 'tarjeta',
            'total' => 998,
        ]);

        $this->assertInstanceOf(Cart::class, $cart);
        $this->assertEquals('Menu: Papas Deluxe, Precio ud: 4.99, Cantidad: 200', $cart->order);
        $this->assertEquals('C/Maracuya', $cart->address);
    }

    public function testMenuModelCanBeSavedAndRetrievedFromDatabase()
    {
        $cart = new Cart([
            'user_id'=>1,
            'order' => 'Menu: Papas Troncho, Precio ud: 4.99, Cantidad: 200',
            'address' => 'C/Gordo',
            'payment' => 'tarjeta',
            'total' => 12,
        ]);
        $this->assertInstanceOf(Cart::class, $cart);
    }
    public function testMenuModelCanBeSavedAndDeletedFromDatabase()
    {
        $cart = new Cart([
            'user_id'=>1,
            'order' => 'Menu: Papas Troncho, Precio ud: 4.99, Cantidad: 200',
            'address' => 'C/Gordo',
            'payment' => 'tarjeta',
            'total' => 12,
        ]);
        $this->assertInstanceOf(Cart::class, $cart);

    }
}
