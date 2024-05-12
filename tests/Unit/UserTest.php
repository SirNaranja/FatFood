<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     */
    public function testMenuModelCanBeCreated()
    {
        $user = User::factory()->make();

        $this->assertInstanceOf(User::class, $user);

    }
    public function testMenuModelCanBeSavedAndRetrievedFromDatabase()
    {
        $user = User::factory()->make();

        $user->save();

        $retrieveduser = User::where('email', $user->email)->first();

        $this->assertEquals($user->email, $retrieveduser->email);
        $this->assertEquals($user->name, $retrieveduser->name);
    }
    public function testMenuModelCanBeSavedAndDeletedFromDatabase()
    {
        $user = User::factory()->make();
        $user->save();
        $user->delete();
        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);
    }
}
