<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truck extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'type'];

    public function terminals()
    {
        return $this->hasOne(terminalToIcd::class);
    }
    public function deliverOrders()
    {
        return $this->hasMany(deliveryOrder::class);
    }
}
