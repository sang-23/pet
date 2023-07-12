<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    use HasFactory;
    protected $table = "vendors";
    protected $primaryKey = "vendors_id";
    protected $fillable = [
        'userven_id',
        'vendors_uname',
        'vendors_email',
        'vendors_password',
    ];

}
