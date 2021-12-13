<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telecom_Value extends Model
{
    use HasFactory;

    protected $table = 'telecom_value';
    protected $fillable = [
      'telecom_id',
        'amount',
        'telecom_key',
        'ratio_true_amount',
        'ratio_false_amount',
        'agency_ratio_true_amount',
        'agency_ratio_false_amount',
        'type_charge',
        'status'
    ];

    function telecom()
    {
        return $this->belongsTo(Telecom::class,'telecom_id','id');
    }
}
