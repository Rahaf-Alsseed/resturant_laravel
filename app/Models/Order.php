<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;
use App\Models\User;
use App\Models\BookOrder;
class Order extends Model
{
    use HasFactory;
    protected $fillable=
    [
        "order_date",
        "food_id",
        "user_id",
        'totalprice'
    ];
    protected $casts=
    [
        "order_date"=>"datetime",
        "food_id"=>"integer",
        "user_id"=>"integer",
        "totalprice"=>"float"
    ];
    public function food():object
    {
        return $this->BelongsTo(Food::class);
    }
    public function user():object
    {
        return $this->BelongsTo(User::class);
    }
    public function BookOrders():object
    {
        return $this->hasMany(BookOrder::class);
    }

}
