<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use \App\User;

class CarBreadTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateCarTest()
    {
        $car = factory(Car::class)->create();
        $this->assertDatabaseHas('cars', ['id' => $car->id]);
    }


}
