<?php

namespace Tests\Feature;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenuControllerTest extends TestCase
{
    use DatabaseTransactions;
    protected $usuario;
    public function setUp(): void
    {
        parent::setUp();

        $this->usuario = User::where('id', 1)->first();
    }
    public function test_menu_can_be_created(){
        $this->actingAs($this->usuario);

        $menu = Menu::factory()->create([
            'name' => 'La antonia',
            'ingredientes' => 'ingrediente1, ingrediente2',
            'section' => 'burgers',
            'allergens' => false,
            'price' => 13.5,
            'url' => 'https://s2.abcstatics.com/abc/www/multimedia/gastronomia/2023/03/07/mejor-hamburguesa-espana-sevilla_20230307190221-RXTcASc7Wu7h5hdg6i3AwmJ-1200x840@abc.jpg'
        ]);
        $data=[
            'name' => 'La antonia',
            'ingredientes' => 'ingrediente1, ingrediente2',
            'section' => 'burgers',
            'allergens' => false,
            'price' => 13.5,
            'url' => 'https://s2.abcstatics.com/abc/www/multimedia/gastronomia/2023/03/07/mejor-hamburguesa-espana-sevilla_20230307190221-RXTcASc7Wu7h5hdg6i3AwmJ-1200x840@abc.jpg'
        ];
        $response = $this->post("/menu");
        $this->assertDatabaseHas('menus', $data);

    }
    public function test_menu_can_be_updated(){

        $this->actingAs($this->usuario);

        $menu = Menu::factory()->create([
            'name' => 'La antonia',
            'ingredientes' => 'ingrediente1, ingrediente2',
            'section' => 'burgers',
            'allergens' => false,
            'price' => 13.5,
            'url' => 'https://s2.abcstatics.com/abc/www/multimedia/gastronomia/2023/03/07/mejor-hamburguesa-espana-sevilla_20230307190221-RXTcASc7Wu7h5hdg6i3AwmJ-1200x840@abc.jpg'
        ]);
        $menu->save();

        $data = [
            'name' => 'La Vegane',
            'ingredientes' => 'ingrediente1, ingrediente2',
            'section' => 'burgers',
            'allergens' => false,
            'price' => 13.4,
            'url' => 'https://s2.abcstatics.com/abc/www/multimedia/gastronomia/2023/03/07/mejor-hamburguesa-espana-sevilla_20230307190221-RXTcASc7Wu7h5hdg6i3AwmJ-1200x840@abc.jpg'
        ];
        $menu->name=$data['name'];
        $menu->ingredientes=$data['ingredientes'];
        $menu->section=$data['section'];
        $menu->allergens=$data['allergens'];
        $menu->price=$data['price'];
        $menu->url=$data['url'];
        $menu->save();

        $response = $this->post("/menuupdate/{$menu->id}");
        $this->assertDatabaseHas('menus', $data);


    }

   public function test_menu_can_be_deleted_and_return_to_menu()
    {

        $this->actingAs($this->usuario);

        $menu = Menu::factory()->create([
            'name' => 'La antonia',
            'ingredientes' => 'ingrediente1, ingrediente2',
            'section' => 'burgers',
            'allergens' => false,
            'price' => 13.5,
            'url' => 'https://s2.abcstatics.com/abc/www/multimedia/gastronomia/2023/03/07/mejor-hamburguesa-espana-sevilla_20230307190221-RXTcASc7Wu7h5hdg6i3AwmJ-1200x840@abc.jpg'
        ]);
        $data=[
            'name' => 'La antonia',
            'ingredientes' => 'ingrediente1, ingrediente2',
            'section' => 'burgers',
            'allergens' => false,
            'price' => 13.5,
            'url' => 'https://s2.abcstatics.com/abc/www/multimedia/gastronomia/2023/03/07/mejor-hamburguesa-espana-sevilla_20230307190221-RXTcASc7Wu7h5hdg6i3AwmJ-1200x840@abc.jpg'
        ];
        $menu->save();
        $response = $this->delete("/menudestroy/{$menu->id}");
        $this->assertDatabaseMissing('menus',$data);
        $response->assertRedirect('/menu');
    }
}

