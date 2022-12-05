<?php

namespace Tests\Unit;

use Tests\TestCase;

use Illuminate\Support\Facades\Hash;



class registerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_can_register(){
        $this->postJson(route('register'),
        [
            'name'=>"User3",
            'email'=>"user3@gmail.com",
            'password'=>"User1234.",
            'password_confirmation'=>"User1234.",
            'state'=>"Selangor"    
        ])->assertCreated();

        $this->assertDatabaseHas('users',['name'=>'User3']);
    }

}
