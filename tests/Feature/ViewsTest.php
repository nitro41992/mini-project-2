<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

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

}
