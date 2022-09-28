<?php

namespace App\Repository\Eloquent;

use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository implements UserRepositoryInterface
{

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return collect([]);    
   }
}