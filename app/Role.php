<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
     protected $fillable = ['name','desc'];
     
     /**
     * The role that belong to the user.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    
    /**
     * The role that belong to the permission.
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
}
