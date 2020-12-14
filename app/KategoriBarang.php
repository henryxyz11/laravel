<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriBarang extends Model
{

    protected $table ='kategori';
    protected $fillable = [
        'kategori'
    ];

    // protected $fillable = ['kategori'];

    // public extends kategori(){
    //     return $this->hasMany('App\DepartemenUser');
    // }
}
