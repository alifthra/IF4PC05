<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class RegulerController extends Controller
{
    public function show()
    {
        $products = Produk::all();

        return view('catatan_reguler', compact('products'));
    }
}