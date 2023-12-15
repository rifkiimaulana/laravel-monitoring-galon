<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DispenserModel extends Model
{
    use HasFactory;
    protected $table = 'smd_msdispenser';
    protected $primaryKey = 'dis_id';
    public $incrementing = false;
    protected $fillable = [ 
        'dis_id', 
        'dis_mikrocontrollerId', 
        'dis_access', 
        'dis_ketersediaan', 
        'dis_lantai',
        'dis_lokasi',
        'dis_status',
    ];

    

}
