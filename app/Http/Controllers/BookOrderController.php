<?php

namespace App\Http\Controllers;

use App\Models\BookOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\TestData;

class BookOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookOrder  $bookOrder
     * @return \Illuminate\Http\Response
     */
    public function show(BookOrder $bookOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookOrder  $bookOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(BookOrder $bookOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookOrder  $bookOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookOrder $bookOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookOrder  $bookOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookOrder $bookOrder)
    {
        //
    }
}
