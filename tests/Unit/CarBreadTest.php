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
    public function testUpdateCarYearTest()
    {
        $car = factory(Car::class)->create();
        DB::table('cars')
            ->where('id', $car->id)
            ->update(['year' => 2000]);
        $this->assertDatabaseHas('cars', ['id' => $car->id, 'year' => '2000']);
    }
    public function testDeleteCarTest()
    {
        $car = factory(Car::class)->create();
        $car->delete();
        $this->assertDatabaseMissing('cars', ['id' => $car->id]);
    }
    public function testCarSeedCountTest()
    {
        $this->artisan('migrate:refresh');
        $this->artisan('db:seed');
        $carCount = DB::table('cars')->count();
        $this->assertLessThanOrEqual(50, $carCount);

    }
    public function testCarYearTypeTest()
    {
        $car = factory(Car::class)->create();
        $this->assertIsInt($car->year);

    }
    public function testCarMakeIsValidTest()
    {
        $car = factory(Car::class)->create();
        $makeValues = ['honda', 'toyota','ford'];
        $this->assertContains($car->make, $makeValues );
    }
}
