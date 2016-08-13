<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicationform extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','first_name','last_name','h_address','h_suburb','h_state','h_postcode','h_email','h_phone', 'date_of_birth','gp_fullname','gp_address','gp_suburb','gp_state','gp_postcode','gp_phone_1','gp_phone_2','facility_id'];
    
    /**
     * Get the facility that owns the application form.
     */
    public function facility()
    {
        return $this->belongsTo('App\Facility');
    }
}
