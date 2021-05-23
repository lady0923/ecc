<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'school' => 'required',
        'zipcode' => 'required',
        'address' => 'required',
        'tel' => 'required',
        'corse' => 'required',
        'year' => 'required',
        'month' => 'required',
        'day' => 'required',
        'week' => 'required',
        'time' => 'required',
        'color' => 'required',
        );
}
