<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use App\Models\Customers_info;

class Pet_info extends Model
{
    use HasFactory;
    protected $table='pet_info';

   
    public function customers_info()
    {
        return $this->belongsTo(Customers_info::class);
    }
}

