<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rate;
use App\Models\Book_Order;
class Resturant extends Model
{
    use HasFactory;
    protected $fillable=
    [
        "title",
        "phone",
        "location",
        "avrage_rate",
    ];
    protected $casts=
    [
     "title"=>"string",
     "phone"=>"string",
     "location"=>"string",  
     "avrage_rate"=>"string", 
    ];
    // protected $append=["avrage_rate"];
    // public function getavrage_rateAttribute()
    // {
    // $result= $this->avrage_rates;
    // if(!$result->empty())
    // {
    //   $total=0;
    //   $count= count($result);

    // }
    // }
    public function rates():object 
    {
        return $this->hasMany(Rate::class);
    }
    public function book_orders():object 
    {
        return $this->hasMany(Book_Order::class);
    }
}
