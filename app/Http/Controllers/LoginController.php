<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            return new JsonResponse(
                [
                    'success' => false, 
                    'message' => $validator->errors()
                ], 
                422
            );
        }



        if($request->expire_date === NULL){
            return new JsonResponse(
                [
                    'success' => false, 
                    'message' => 'Please wait for your account to be accepted by our admin',
                    'test' => $request->expire_date
                ], 
                400
            );
        }

        

        $user = User::where('email', $request->all()['email'])->first();

        // Check Password
        if (!$user || !Hash::check($request->all()['password'], $user->password)) {
            return new JsonResponse(
                [
                    'success' => false, 
                    'message' => 'Invalid Email or Password'
                ], 
                400
            );
        }

        $token = $user->createToken('myapptoken')->plainTextToken;
        
        return new JsonResponse(
                [
                    'success' => true, 
                    'token' => $token
                ], 
                200
            );
    }

    public function logout(Request $request)
    {
    auth()->user()->tokens()->delete();

    return new JsonResponse(
        [
            'success' => true, 
            'message' =>'Logged Out Successfully'
        ], 
        200
    );

 }

}
