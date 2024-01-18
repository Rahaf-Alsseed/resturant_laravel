<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rate;
class Resturant extends Model
{
    use HasFactory;
    protected $fillable=
    [
        "title",
        "phone",
        "location",
    ];
    protected $casts=
    [
     "title"=>"string",
     "phone"=>"string",
     "location"=>"string",   
    ];
    public function rates():object 
    {
        return $this->hasMany(Rate::class);
    }
}
