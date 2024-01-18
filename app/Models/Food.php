<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class Food extends Model
{
    use HasFactory;
    protected $fillable=
    [
        "title",
        "description",
        "price",
    ];
    protected $casts=
    [
        "title"=>"string",
        "description"=>"string",
        "price"=>"float",
    ];
    public function orders():object 
    {
        return $this->hasMany(Order::class);
    }
}
