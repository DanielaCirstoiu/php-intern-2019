<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primarykey = "id";
    
    protected $fillable = [
        'name'
    ];    

    protected function companies()
    {
        return $this->belongsTo('App\Company');
    }
}
