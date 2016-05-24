<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CumulativeStats extends Model
{
    /**
	 * The table that the model draws from 
	 */
	protected $table = 'cumulative_stats';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'emails', 'calls', 'development', 'extra_tasks'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
}
