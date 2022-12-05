<?php

namespace Tests\Unit;

use Tests\TestCase;


class deletefunctionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_deletepost(){
        $this->get('/deletepost/'.$id=10);
        $this->assertDatabaseMissing('posts',['id'=>10]);
    }

    public function test_can_deleteshelter(){
        $this->get('/deleteshelter/'.$id=7);
        $this->assertDatabaseMissing('shelterlist',['id'=>7]);
    }

    public function test_can_deletecontact(){
        $this->get('/deletecontact/'.$id=12);
        $this->assertDatabaseMissing('contactlist',['id'=>12]);
    }

    public function test_can_deleteinfo(){
        $this->get('/deletesop/'.$id=6);
        $this->assertDatabaseMissing('soplist',['id'=>6]);
    }

    public function test_can_deletecomment(){
        $this->get('/deletecomment/'.$id=5);
        $this->assertDatabaseMissing('comments',['id'=>5]);
    }
}
