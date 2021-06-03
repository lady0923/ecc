<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'test_sbt' => 'required',
        'profile_id' => 'required',
        'test_date' => 'required',
        'score' => 'required|integer',
        );
        
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
