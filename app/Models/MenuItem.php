<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'id',
        'name',
        'url',
        'parent_id'
    ];

    public function parent()
    {
        return $this->belongsTo('App\Models\MenuItem','parent_id')->where('parent_id',null);
    }

    public function children()
    {
        return $this->hasMany('App\Models\MenuItem','parent_id');
    }
}
