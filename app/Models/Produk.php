<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    protected $fillable = [
        'nama', 'berat', 'harga'
    ];
    
    use HasFactory;
    protected $table = 'products';
    protected $guarded = [];
}