<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StokBarang extends Model
{
    protected $table = 'stok_barang';

    protected $fillable = [
        'nama_barang',
        'kategori',
        'satuan',
        'stok',
        'stok_minimum'
    ];

    public function getStatusAttribute()
    {
        if ($this->stok <= 0) {
            return 'Habis';
        }

        if ($this->stok <= $this->stok_minimum) {
            return 'Menipis';
        }

        return 'Aman';
    }
}
