<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class updatefunctionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_loadposttoedit(){
        $this->get('/editpost/'.$id=8)->assertStatus(200);
    }

    public function test_can_editpost(){
        Storage::fake('image');
        $file = UploadedFile::fake()->image('image.jpg');
        $this->postJson(route('updatepost'),
        [
            'post_id'=>'8',
            'title'=>"help me find my cat2 ",
            'content'=>"my cat is black colour 2 years old ",
            'cat'=>"lostfound",
            'user_id'=>"2",
            'image'=>$file,
        ]);

        $this->assertDatabaseHas('posts',['title'=>'help me find my cat2 ']);
    }


}
