<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = "barang";
 
    protected $fillable = ['id','kode_barang','nama_barang','harga','deskripsi','file','stok'];
}
