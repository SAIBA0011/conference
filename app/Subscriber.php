<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'member_body', 'country', 'body_sa', 'option'];
    protected $table = 'subscribers';
}
