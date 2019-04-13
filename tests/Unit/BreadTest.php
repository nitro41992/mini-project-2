<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use \App\User;

class BreadTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateUserTest()
    {
        $user = factory(User::class)->create();
        //dd($user);
        $this->assertDatabaseHas('users', ['id' => $user->id]);
    }
    public function testUpdateUserNameTest()
    {
        $user = factory(User::class)->create();
        DB::table('users')
            ->where('id', $user->id)
            ->update(['name' => 'Steve Smith']);
        dd($user);
        $this->assertDatabaseHas('users', ['id' => $user->id, 'name' => 'Steve Smith']);
    }
}
