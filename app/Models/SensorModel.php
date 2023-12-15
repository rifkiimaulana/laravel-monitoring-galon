<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorModel extends Model
{
    use HasFactory;
    protected $table = 'smd_msSensor';
    protected $primaryKey = 'sen_id';
    public $incrementing = false;
    protected $fillable = [ 
        'sen_id', 
        'sen_nama', 
        'sen_status_pemakaian', 
        'sen_status', 
        'create_by',
        'modif_by',
        'create_date',
        'modify_date',
    ];
}
