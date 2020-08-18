<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function pesanan()
    {
        return $this->belongTo(Pesanan::class,'pesanan_id', 'id');
    }
    
    public function product()
    {
        return $this->belongTo(Product::class,'product_id', 'id');
    }

}
