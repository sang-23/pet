<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet_info;

class breedc extends Model
{
    use HasFactory;
    protected $table = "breeds_info";
    protected $primaryKey = "breed_id";

    public function Pet_info(){
        return $this->hasMany(Pet_info::class,'pet_breedid','breed_id');

    }
}
