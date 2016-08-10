<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
     protected $fillable = ['name'];
     
     /**
     * The permission that belong to the roles.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
