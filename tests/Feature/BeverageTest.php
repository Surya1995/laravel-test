<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Beverage;
class BeverageTest extends TestCase
{
    //use DatabaseMigrations;
    //use DatabaseTransactions;
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function user_visit_bevrage_page()
    {
        $beverage = factory(Beverage::class)->create();
        $response = $this->get('/beverage');
        $response->assertSee($beverage->name);
        $response->assertStatus(200);
    }
}
