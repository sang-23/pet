<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use App\Models\Customers_info;

use App\Models\petc;
use App\Models\breedc;
=======


class Pet_info extends Model
{
    use HasFactory;
    protected $table='pet_info';

    protected $primaryKey = "pet_id";
=======


   
    public function customers_info()
    {
        return $this->belongsTo(Customers_info::class);
    }


    public function petc()
    {
        return $this->belongsTo(petc::class);
    }
    public function breedc()
    {
        return $this->belongsTo(breedc::class);
    }
=======

}

