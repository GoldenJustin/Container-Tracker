<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class icd extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'location', 'containerCapacity', 'availableTrucks'];

    public function terminals()
    {
        return $this->hasOne(terminalToIcd::class);
    }
}
