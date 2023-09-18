<?php

namespace App\Models;
use APP\Models\Chart;
use APP\Models\Detail;
use APP\Models\Payment;
use APP\Models\Shipment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function chart()
    {
        return $this->belongsTo(Chart::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function shipment()
    {
        return $this->hasOne(Shipment::class);
    }
}
