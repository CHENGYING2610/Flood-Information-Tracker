<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactmodel extends Model
{
    use HasFactory;
    public $table="contactlist";
    protected $fillable=['name','number','email','description','state'];
}
