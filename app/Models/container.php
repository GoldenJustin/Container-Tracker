<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;
    protected $fillable = ['weight', 'size', 'number'];

    public function terminals()
    {
        return $this->hasOne(terminalToIcd::class);
    }
    public function deliverOrders()
    {
        return $this->hasOne(deliveryOrder::class);
    }
}