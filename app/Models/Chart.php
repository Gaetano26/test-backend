<?php

namespace App\Models;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
