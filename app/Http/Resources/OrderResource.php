<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            "user_name"=>$this->user->name,
            "foods_order"=>$this->food->title,
            "order_date"=>$this->order_date,
            "total_price of order"=>$this->totalprice,
        ];
    }
}
