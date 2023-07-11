<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petc extends Model
{
    use HasFactory;
    protected $table = "pets_category";
    protected $primaryKey = "pet_typeid";
   
}
