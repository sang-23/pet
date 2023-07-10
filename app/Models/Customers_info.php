<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use App\Models\Pet_info;
class Customers_info extends Model
{
    use HasFactory;
    protected $table='customers_info';
    
    public function Pet_info(){
        return $this->hasMany(Pet_info::class,'pet_parentid','customers_id');

    }
}