<?php

namespace Tests\Unit;

use Tests\TestCase;

use Illuminate\Support\Facades\Hash;

class loginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_login(){
        $this->postJson(route('login'),
    [
        'email'=>"user2@gmail.com",
        'password'=>"User1234."
    ])->assertStatus(204);
    }

}
