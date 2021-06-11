<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Speedboat extends Model
{
    protected $table = 'speedboats';
    protected $guarded = [];

    public function Pesanan()
    {
        return $this->hasMany('App\Models\Pesanan');
    }
}
