<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Num_lv extends Model
{
    use HasFactory;
    protected $fillable=[
        'stt',
        'username_cus',
        'hsd',
        'status',
        'sdt',
        'email',
        'service'
    ];
    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function device(){
        return $this->belongsTo(Device::class);
    }

}
