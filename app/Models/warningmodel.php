<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warningmodel extends Model
{
    use HasFactory;
    public $table="warning";
    protected $fillable=['title','description','level','location'];
}
