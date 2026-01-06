<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
   public function print($name)
    {
        return view('profile', compact('name'));
    }
}
