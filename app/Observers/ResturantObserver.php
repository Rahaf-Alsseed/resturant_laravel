<?php

namespace App\Observers;

use App\Models\Resturant;
use  App\Models\Rate;

class ResturantObserver
{
    /**
     * Handle the Resturant "created" event.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return void
     */
    public function created(Resturant $resturant)
    {
        $rates= Rate::where("resturant_id",$resturant->id)->get();
      
        if(!$rates->rate->empty())
        {
            $total_rate=0;
            $count= $rate->rate->count();
        foreach($rates as $rate)
             {
            $total_rate= $rate->rate+$total_rate;
             }
        $resturant->avrage_rate= $total_rate/$count;
        $resturant->avrage_rate->save();
        
        }
        else 
        {
            return "no rating about this resturant";
        }
    }

    /**
     * Handle the Resturant "updated" event.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return void
     */
    public function updated(Resturant $resturant)
    {
        //
    }

    /**
     * Handle the Resturant "deleted" event.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return void
     */
    public function deleted(Resturant $resturant)
    {
        //
    }

    /**
     * Handle the Resturant "restored" event.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return void
     */
    public function restored(Resturant $resturant)
    {
        //
    }

    /**
     * Handle the Resturant "force deleted" event.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return void
     */
    public function forceDeleted(Resturant $resturant)
    {
        //
    }
}
