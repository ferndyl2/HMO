<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctorfile extends Model
{

    protected $fillable = [

        'doctors_code', 'last_name', 'first_name', 'middle_initial', 'specialty'

    ];

}