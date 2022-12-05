<?php

namespace Tests\Unit;

use Tests\TestCase;

use Illuminate\Support\Facades\Hash;

class viewTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_view_homepage()
    {
        $res=$this->get('/home');
        $res->assertStatus(200);
    }
    public function test_view_forum()
    {
        $res=$this->get('/forum');
        $res->assertStatus(200);
    }
    public function test_view_contactlist()
    {
        $res=$this->get('/contactlist');
        $res->assertStatus(200);
    }
    public function test_view_shelterlist()
    {
        $res=$this->get('/shelter');
        $res->assertStatus(200);
    }
    public function test_view_news2()
    {
        $res=$this->get('/news2');
        $res->assertStatus(200);
    }

}
