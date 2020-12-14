<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartemenUser extends Model
{


    protected $table = "departemen_user";

    protected $fillable = ['user_id','departemen_id'];

}
