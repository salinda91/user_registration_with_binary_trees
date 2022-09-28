<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
   {
       $this->userService = $userService;
   }

    public function registration(UserRegistrationRequest $request){

    
        dd($this->userService->userStore($request->all()));

        // $user = $this->userService->get();
        // dd($user);
    }
}
