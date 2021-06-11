<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    protected $table = "penumpangs";
    protected $guarded = [];

    public function Customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    public function Pesanan()
    {
        return $this->belongsTo('App\Models\Pesanan','pesanan_id');
    }
}
