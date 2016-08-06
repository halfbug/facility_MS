<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','desc','address','suburb','state','postcode','phone','web_url','email','parent_id','tree_level'];
    
    /**
     * The facilities that belong to the user.
     */
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
