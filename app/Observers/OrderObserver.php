<?php

namespace App\Observers;

use App\Models\Order;
use App\Models\BookOrder;
class OrderObserver
{
    /**
     * Handle the Order "created" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        $orders= BookOrder::find($order->id);
        $total_price=0;
        if(!$order->totalprice->isEmpty())
        {
        foreach($orders as $order)
             {
            $total_price= $total_price + $order->totalprice;
             }
             $order->totalprice=$total_price;
             $order->totalprice->save();
       }
       else
       {
        return "the list of oreders is empty";
       }
    }

    /**
     * Handle the Order "updated" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        //
    }

    /**
     * Handle the Order "deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
