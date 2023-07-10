<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class breedc extends Model
{
    use HasFactory;
    protected $table = "breeds_info";
    protected $primaryKey = "breed_id";
}
