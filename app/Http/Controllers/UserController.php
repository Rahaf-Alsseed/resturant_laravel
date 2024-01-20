<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\traits\GeneralTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Order;
class UserController extends Controller
{
    use GeneralTrait;
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

     public function rigester(Request $request)
     {
        $validate= Validator::make($request->all(),
            [
                "name"=>"required|min:3",
                "email"=>"required|unique:users,email|ends_with:hotmail.com,gmail.com",
                "mobile"=>"required|string|unique:users,mobile|regex:/^(09)[0-9]{8}$/",
                "password"=>"required|min:6",
                
            ]);
            if($validate->fails())
        {
            return $this->requiredField($validate->errors());
        }
        $data= $request->all();
     
        $user= User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'password'=>Hash::make($request->password)
            
        ]);
      
            $token = $user->createToken('MyApp')->plainTextToken;
            $data['name']=$user->name;
            $data['email']=$user->email;
            $data['token']=$token;

           return $this->apiResponse($data) ; 
        
  
        
     }
    public function login(Request $request)
    {
  
        $validator =Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        if($validator->fails()) {
            return $this->errorResponse($validator->errors(), 422);
        }
        
        $user = User::where('email', $request->email)->first();

        $data['name']= $user->name;
        $data['token'] = $user->createToken('apiToken')->plainTextToken;
      
        return $this->apiResponse($data); 
      

    
    }
    public function logout(Request $request)
    {
        auth('sanctum')->user()->tokens()->delete();
        return $this->apiResponse(['data:'=>'User has log out successfully.']) ;

    }




    public function userOrder($id)
    {
        $user = User::find($id);
        if(!$user)
        {
            return $this->notFoundResponse("no order for user");
        }
        else
        {
        $user_oerder= $user->orders;

        return $this->apiResponse(Order::collection($user_order));
        }
    }

}
