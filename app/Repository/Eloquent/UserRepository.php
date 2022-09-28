<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository implements UserRepositoryInterface
{

    /**
    * @return any
    */
   public function store($data)
   {
        return User::create($data);
   }

   public function getRecord($orderBy, $direction,$where=[], $current)
   {
        return User::orderBy($orderBy,$direction)
        ->where($where)
        ->where('id','!=',$current)
        ->first();
   }

   public function update($id, $data)
   {
        return User::where('id',$id)->update($data);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return collect([]);    
   }

   
}