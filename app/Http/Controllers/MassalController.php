<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class MassalController extends Controller
{
    public function show()
    {
        $products = Produk::all();

        return view('catatan_massal', compact('products'));
    }
}