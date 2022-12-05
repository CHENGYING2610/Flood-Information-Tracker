<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Support\Facades\Hash;

class addfunctionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_createpost(){
        Storage::fake('image');
        $file = UploadedFile::fake()->image('image.jpg');
        $this->postJson(route('addpost'),
        [
            'title'=>"help me find my cat1 ",
            'content'=>"my cat is black colour 2 years old ",
            'cat'=>"lostfound",
            'user_id'=>"2",
            'image'=>$file,
        ]);

        $this->assertDatabaseHas('posts',['title'=>'help me find my cat1 ']);
    }

    public function test_can_createshelter(){
        $this->postJson(route('addshelter'),
        [
            'name'=>"Humanitarian Aid Selangor Society1",
            'number'=>"01111483414",
            'email'=>"http://hass.life/",
            'address'=>"14, Jalan 4, Selayang Baru, 68100 Batu Caves, Selangor",
            'maxpax'=>"100",
            'description'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1019757.2107131779!2d100.61169102513075!3d3.243603800000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4781dd8a4551%3A0x32ec3a008362a430!2sHumanitarian%20Aid%20Selangor%20Society!5e0!3m2!1sen!2smy!4v1660628082468!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'state'=>"Selangor",
        ]);

        $this->assertDatabaseHas('shelterlist',['name'=>'Humanitarian Aid Selangor Society1']);
    }

    public function test_can_createcontact(){
        $this->postJson(route('addcontact'),
        [
            'name'=>"Shah Alam City Council1",
            'number'=>"03-5522 2787",
            'email'=>"-",
            'description'=>'-',
            'state'=>"Selangor",
        ]);

        $this->assertDatabaseHas('contactlist',['name'=>'Shah Alam City Council1']);
    }

    public function test_can_createinfo(){
        $this->postJson(route('addsop'),
        [
            'title'=>"Maklumat terkini1",
            'details'=>'<blockquote class="twitter-tweet"><p lang="in" dir="ltr">Maklumat terkini - Berikut adalah talian ‘hotline’ Pusat Operasi Kecemasan Bencana Banjir di Selangor. Pusat ini beroperasi selama 24 jam sehari, 7 hari seminggu. Sebarkan dan panjangkan kepada rakan-rakan dan ahli keluarga. <br><br>03-5650 0503<br>03-5650 0504<br>03-5650 0599 <a href="https://t.co/raFsoWCrXx">pic.twitter.com/raFsoWCrXx</a></p>&mdash; Amirudin Shari (@AmirudinShari) <a href="https://twitter.com/AmirudinShari/status/1472231805407227910?ref_src=twsrc%5Etfw">December 18, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>',
            'user_id'=>"1",
        ]);

        $this->assertDatabaseHas('soplist',['title'=>'Maklumat terkini1']);
    }

    public function test_can_createcomment(){
        $this->postJson(route('addcomment'),
        [
            'post_id'=>"1",
            'content'=>"OMG hope u find your dog as soon as posible1",
            'user_id'=>"1",
        ]);

        $this->assertDatabaseHas('comments',['content'=>'OMG hope u find your dog as soon as posible1']);
    }
}
