<?php

namespace Tests\Unit;

use App\Models\Menu;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MenuTest extends TestCase
{
    use DatabaseTransactions;

    public function testMenuModelCanBeCreated()
    {
        $menu = new Menu([
            'name' => 'Hamburguesa con queso',
            'ingredientes' => 'Carne de vacuno, queso cheddar, lechuga, tomate, cebolla',
            'section' => 'Hamburguesas',
            'allergens' => 0,
            'price' => 10.50,
            'url' => 'https://mi-hamburgueseria.com/menu/hamburguesa-con-queso'
        ]);

        $this->assertInstanceOf(Menu::class, $menu);
        $this->assertEquals('Hamburguesa con queso', $menu->name);
        $this->assertEquals('Carne de vacuno, queso cheddar, lechuga, tomate, cebolla', $menu->ingredientes);
    }

    public function testMenuModelCanBeSavedAndRetrievedFromDatabase()
    {
        $menu = new Menu([
            'name' => 'Hamburguesa con queso',
            'ingredientes' => 'Carne de vacuno, queso cheddar, lechuga, tomate, cebolla',
            'section' => 'Hamburguesas',
            'allergens' => 0,
            'price' => 10.50,
            'url' => 'https://mi-hamburgueseria.com/menu/hamburguesa-con-queso'
        ]);

        $menu->save();

        $retrievedMenu = Menu::where('name', 'Hamburguesa con queso')->first();

        $this->assertEquals('Hamburguesa con queso', $retrievedMenu->name);
        $this->assertEquals('Carne de vacuno, queso cheddar, lechuga, tomate, cebolla', $retrievedMenu->ingredientes);
    }
    public function testMenuModelCanBeSavedAndDeletedFromDatabase()
    {
        $menu = new Menu([
            'name' => 'Hamburguesa con queso',
            'ingredientes' => 'Carne de vacuno, queso cheddar, lechuga, tomate, cebolla',
            'section' => 'Hamburguesas',
            'allergens' => 0,
            'price' => 10.50,
            'url' => 'https://mi-hamburgueseria.com/menu/hamburguesa-con-queso'
        ]);
        $menu->save();
        $menu->delete();


        $this->assertDatabaseMissing('menus', [
            'id' => $menu->id,
        ]);
    }
    public function testMenuModelCanBeUpdated()
    {
        $menu = new Menu([
            'name' => 'Hamburguesa con queso',
            'ingredientes' => 'Carne de vacuno, queso cheddar, lechuga, tomate, cebolla',
            'section' => 'Hamburguesas',
            'allergens' => 0,
            'price' => 10.50,
            'url' => 'https://mi-hamburgueseria.com/menu/hamburguesa-con-queso'
        ]);
        $menu->save();
        $menu->name="Borgir";
        $menu->ingredientes="Lechuga";
        $menu->update();
        $this->assertInstanceOf(Menu::class, $menu);
        $this->assertEquals('Borgir', $menu->name);
        $this->assertEquals('Lechuga', $menu->ingredientes);
    }
}
