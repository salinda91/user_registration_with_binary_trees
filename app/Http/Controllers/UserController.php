<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
   {
       $this->userService = $userService;
   }

    public function test(){
        $user = $this->userService->get();
        dd($user);
    }
}