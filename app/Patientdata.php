<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patientdata extends Model
{
    protected $fillable = [

        'h_code', 'h_desc', 'patient_codes', 'last_name', 'first_name', 'middle_initial', 'dependent', 'date_avail', 'i_code', 'i_desc', 'sundries', 'prof_fee', 'credits'

    ];
}
