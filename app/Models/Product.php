<?php

namespace App\Models;
use App\Models\Chart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function charts()
    {
        return $this->belongsToMany(Chart::class)->withPivot('quantity');
    }
}
