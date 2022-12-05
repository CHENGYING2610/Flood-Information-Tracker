<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sopmodel extends Model
{
    use HasFactory;
    public $table="soplist";
    protected $fillable=['title','details','user_id'];
}
