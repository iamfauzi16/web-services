<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $guarded = [];

    public function detail()
    {
        return $this->hasMany(AbsensiDetail::class);
    }
}
