<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','username', 'email', 'password','is_approved', 'approved_by', 'approved_date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Get the facilities associated with the give user
     *
     * @var array
     */
    public function facilities(){
     
        return $this->belongsToMany('App\Facility');
    
    }
    
    /**
     * Get the roles associated with the give user
     *
     * @var array
     */
    public function roles(){
     
        return $this->belongsToMany('App\Role');
    
    } 
            
    /**
     * get roles in array
     */
    public function getRoleArray(){
        $roleNameArray=[];
        foreach ($this->roles->toArray() as $role) {
            $roleNameArray[]=$role['name'];
        }
        return($roleNameArray);
    }
    
    /*
     * get user main facility
     */
    public function mainFacility(){
        return $this->facilities()->where('parent_id',null)->get()->toArray();
    }
    
    
    /*
     * get user branches
     */
    public function assignedBranches(){
        return $this->facilities()->where('parent_id','!=',null)->get()->toArray();
    }
}
