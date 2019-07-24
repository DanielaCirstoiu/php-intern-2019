<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $primarykey = "id";

    protected $fillable = [
        'name', 'description'
    ];

    protected function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
