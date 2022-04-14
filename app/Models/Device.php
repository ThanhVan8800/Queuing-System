<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_name',
        'ip_address',
        'service_use',
        'type',
        'user_name',
        'password'
    ];
}
