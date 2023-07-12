<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet_info;
class petc extends Model
{
    use HasFactory;
    protected $table = "pets_category";
    protected $primaryKey = "pet_typeid";
   

    public function Pet_info(){
        return $this->hasMany(Pet_info::class,'pet_type_id','pet_typeid');

    }
}
