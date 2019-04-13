<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\User;

class ViewsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegisterReturnSuccessfulTest()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function testLoginReturnSuccessfulTest()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function testAboutReturnSuccessfulTest()
    {
        $user = factory(User::class)->make([
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);
        //dd($user);
        $response =  $this->actingAs($user, 'api')->get('/about');

        $response->assertStatus(200);
    }
    public function testContactReturnSuccessfulTest()
    {
        $user = factory(User::class)->make([
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);
        //dd($user);
        $response =  $this->actingAs($user, 'api')->get('/contact');

        $response->assertStatus(200);
    }

}
