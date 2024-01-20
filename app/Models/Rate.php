<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resturant;
use App\Models\User;
class Rate extends Model
{
    use HasFactory;
    protected $fillable=[
        "user_id",
        "resturant_id",
        "rate",
        "comment",
    ];
    protected $casts=
    [
        "user_id"=>"integer",
        "resturant_id"=>"integer",
        "comment"=>"text",
    ];
    public function user():object
    {
        return $this->BeLongsTo(User::class);
    }
    public function resturant():object
    {
        return $this->BeLongsTo(Resturant::class);
    }
}
