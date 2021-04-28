<?php

namespace App\Models;
use App\Models\Workshop;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name'
    ];

    public function workshops()  
    {  
        return $this->hasMany('App\Models\Workshop');  
    }
}
