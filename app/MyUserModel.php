<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyUserModel extends Model
{
    protected $table = 'myusers';
    protected $fillable = ['username', 'password', 'firstname', 'lastname', 'email', 'phone', 'image', 'interests'];

}
