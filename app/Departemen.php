<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{

    protected $table = "departemen";

    public function pengguna(){
        return $this belongsToMany('App\User')
    }

}
