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
        'first_name', 'last_name', 'email', 'password',
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
     * Role relationship
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    
    /**
     * Raw Stats relationship
     */
    public function rawstats()
    {
        return $this->hasOne('App\RawStats');
    }
    
    /**
     * Processed Stats relationship
     */
    public function processedstats()
    {
        return $this->hasOne('App\ProcessedStats');
    }
}
