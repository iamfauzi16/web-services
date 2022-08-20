<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsensiDetail extends Model
{
    protected $guarded = [];

    public function absensi()
    {
        return $this->belongsTo(Absensi::class);
    }
}
