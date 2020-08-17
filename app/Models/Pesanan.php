<?php

namespace App;
use App\User;
use App\Models\PesananDetail;
use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function pesanan_details()
    {
        return $this->hasMany(PesananDetail::class,'pesanan_id', 'id');
    }

    public function prodcuts()
    {
        return $this->hasMany(Product::class,'product_id', 'id');
    }

    public function user()
    {
        return $this->belongTo(User::class,'user_id', 'id');
    }
}
