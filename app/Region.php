<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model {
    
    /**
     * Protect against mass assignment
     */
    protected $fillable = [
        'name',
    ];
    
    /**
    * User has many cities
    * @return \Illuminte\Database\Eloquent\Relations\HasMany
    */    
    public function cities()
    {
        return $this->hasMany('App\City');
    }

}
