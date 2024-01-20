<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Food;
class ResturantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            "title"=>$this->title,
            "phone"=>$this->phone,
            "cusin_type"=>Food::collection($this->title),
            "location"=>$this->location,
            "avrage_rate"=>$this->avrage_rate,
        ];
    }
}
