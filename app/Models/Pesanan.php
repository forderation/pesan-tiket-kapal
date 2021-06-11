<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = "pesanans";
    protected $guarded = [];

    public function Penumpangs()
    {
        return $this->hasMany('App\Models\Penumpang');
    }

    public function Speedboats()
    {
        return $this->belongsTo('App\Models\Speedboat', 'speedboat_id');
    }
}
