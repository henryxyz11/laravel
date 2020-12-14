<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['nama', 'kode_barang', 'tahun_barang','jumlah_barang', 'deskripsi', 'lokasi', 'status','foto','kategori'];

    /**
     * Method One To Many
     */
    public function transaksi()
    {
    	return $this->hasMany(Transaksi::class);
    }
}
