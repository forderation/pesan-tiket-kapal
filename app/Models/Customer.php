<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    public $table = 'customers';
    protected $guarded = [];

    public function Penumpang()
    {
        return $this->hasMany('App\Models\Penumpang');
    }
}
