<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Beverage;
use App\User;
use App\Exceptions\MinorCannotBuyAlcoholicBeverageException;
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

     /**
     * A basic test example.
     * @test
     * @return void
     */
    public function buy_alcohol_with_login()
    {
        $beverage = factory(Beverage::class)->make([
            'type' => 'alcoholic'
        ]);

        $user = factory(User::class)->make([
            'age' => '20'
        ]);

        $this->actingAs($user);

        $this->expectException(MinorCannotBuyAlcoholicBeverageException::class);

        $beverage->buy();   
    }
}
