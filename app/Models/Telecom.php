<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telecom extends Model
{
    use HasFactory;

    protected $table = 'telecom';
    protected $fillable = [
        'title',
        'image',
        'key',
        'ratio',
        'status',
        'type_charge',
        'gate_id',
        'order',
    ];

    function telecomValue()
    {
        return $this->hasMany(Telecom_Value::class,'telecom_id','id');
    }
}
