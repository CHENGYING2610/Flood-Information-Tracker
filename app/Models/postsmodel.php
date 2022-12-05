<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postsmodel extends Model
{
    use HasFactory;
    public $table="posts";
    protected $fillable=['title','content','user_id'];
}
