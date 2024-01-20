<?php

namespace App\Http\Controllers;

use App\Models\Resturant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ResturantResource;
use App\Http\Traits\GeneralTrait;
class ResturantController extends Controller
{ use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resturant = Resturant::all();
        return ResturantResource::collection($resturant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $validate= Validator::make($request->all(),[
            "cusin_type"=>"required|string",
            "location"=>"required|string",
        ]);
        if($validate->fails())
        {
            return $this->requiredField($validate->errors());
        }
        $result= Resturant::where("cusin_type",$request->cusin_type,"location")
        ->where($request->location)->get();
        if($result)
        {
            return $this->apiResponse(ResturantResource::collection($result));
        }
        else{
            return $this->notFoundResponse("no resturant");
        }

    }
}
