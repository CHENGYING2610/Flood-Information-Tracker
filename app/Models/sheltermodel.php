<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sheltermodel extends Model
{
    use HasFactory;
    public $table="shelterlist";
    protected $fillable=['name','number','email','address','maxpax','description','state'];
}
