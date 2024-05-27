<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class terminalToIcd extends Model
{
    use HasFactory;
    protected $fillable = ['container_id', 'driver_id', 'truck_id', 'icd_id', 'departureDate', 'arrivalDate', 'isArrived'];

    public function trucks()
    {
        return $this->belongsTo(truck::class, 'truck_id');
    }

    public function containers()
    {
        return $this->belongsTo(Container::class, 'container_id');
    }
    public function icds()
    {
        return $this->belongsTo(icd::class, 'icd_id');
    }
}
