<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deliveryOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'container_id', 'truck_id', 
        'driver_id', 'departureDate', 'expected_arrival', 'isArrived'
    ];

    public function trucks()
    {
        return $this->belongsTo(truck::class, 'truck_id');
    }

    public function containers()
    {
        return $this->belongsTo(Container::class, 'container_id');
    }

    public function customers()
    {
        return $this->belongsTo(customer::class, 'customer_id');
    }
}

