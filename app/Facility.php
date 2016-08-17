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
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    
    /**
     * Get all of the aplications forms for the facility.
     */
    public function application_forms()
    {
        return $this->hasMany('App\Application_Form');
    }
    
    public function mainFacility()
    {
        return $this->belongsTo($this, 'parent_id');
    }

    public function branches()
    {
            return $this->hasMany($this, 'parent_id');
    }
    
}
