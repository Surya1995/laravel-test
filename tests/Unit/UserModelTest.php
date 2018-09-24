<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class UserModelTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function User_has_fullname_Attribute()
    {
        $user = User::create(['name'=>'shubham','email'=>'shubham@mvs.pw','password'=>'secret']);

        $this->assertEquals('shubham@mvs.pw',$user->email);
    }
}
