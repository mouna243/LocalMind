<?php

namespace App\Models;
use App\Models\User;
class Reader extends User {

private $role;

public function __construct(User $user, $role) {
   $this->user = $user;
   $this->role = $role;

}


}