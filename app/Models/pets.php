<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pets extends Model
{
    use HasFactory;
    protected $table = "pet_info";
    protected $primaryKey = "pet_id";
}
