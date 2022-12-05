<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentsmodel extends Model
{
    use HasFactory;
    public $table="comments";
    protected $fillable=['post_id','content','user_id'];
}
