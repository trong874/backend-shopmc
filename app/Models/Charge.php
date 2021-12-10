<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;

    protected $table = 'charge';
    protected $fillable = [
      'shop_id',
        'type_charge',
        'user_id',
        'gate_id',
        'telecom_key',
        'pin',
        'serial',
        'declare_amount',
        'amount',
        'ratio',
        'real_received_amount',
        'txns_id',
        'response_code',
        'response_mess',
        'tranid',
        'description',
        'ip',
        'processor_id',
        'process_at',
        'process_log',
        'api_type',
        'status',
        'status_callback',
    ];
}
