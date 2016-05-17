<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessedStats extends Model
{
	/**
	 * The table that the model draws from 
	 */
	protected $table = 'processed_stats';

	/**
	 * Using the guarded attribute as there are so many fields
	 */
	protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
    
    /**
     * User relationship
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
