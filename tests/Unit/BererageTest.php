<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Beverage;
class BererageTest extends TestCase
{

    private $beverage;
    public function setup()
    {
        parent::setup();
        $this->beverage = factory(Beverage::class)->make();
    }

    use DatabaseTransactions;
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function beverage_has_name()
    {
        $this->assertNotEmpty($this->beverage->name);
    }

     /**
     * A basic test example.
     * @test
     * @return void
     */
    public function beverage_has_type()
    {
        $this->assertNotEmpty($this->beverage->type);
    }
}
