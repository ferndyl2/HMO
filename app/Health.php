<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $fillable = [

        'hmo_code', 'hmo_description','hmo_sfx','hmo_status', 'credit_limit'

    ];
}
