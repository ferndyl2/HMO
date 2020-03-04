<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyfile extends Model
{
    protected $fillable = [

        'hmo_code' , 'hmo_desc' , 'hmo_sfx' , 'hmo_status' , 'credit_limit'
    ];
    
    
}
