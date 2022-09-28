<?php

namespace App\Services;

use App\Repository\UserRepositoryInterface;

class UserService{

    private $userRepository;

    /**
    * UserService constructor.
    *
    */
   public function __construct(UserRepositoryInterface $userRepository)
   {
       $this->userRepository = $userRepository;
   }

   public function get()
   {
    return $this->userRepository->all();
   }

}