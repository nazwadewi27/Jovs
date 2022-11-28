<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Produk extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'produks';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        "kategoris_id",
        "gambar",
        "nama_produk",
        "deskripsi",
        "harga_jual",
    ];

}
