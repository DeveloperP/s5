<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PslPurpose extends Model
{
    protected $guarded = [];

    /*
     * Get the calls associates with the given purpose
     */
    public function calls()
    {
        return $this->belongsToMany('App\Models\PslCall');
    }
}
