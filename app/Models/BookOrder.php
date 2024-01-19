<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Order;
use App\Models\Resturant;
class BookOrder extends Model
{
    use HasFactory;
    protected $fillable=
    [
        "date_book",
        "order_id",
        "user_id",
    ];
    protected $casts=
    [
        "date_book"=>"datetime",
    ];
    public function order():object
    {
        return $this->BeLongsTo(Order::class);
    }
    public function user():object
    {
        return $this->BeLongsTo(User::class);
    }
    public function resturant():object
    {
        return $this->BeLongsTo(Resturant::class);
    }
}
