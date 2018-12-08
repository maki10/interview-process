<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewType extends Model
{
    protected $fillable = [
    	'name',
        'status',
        'description',
    ];

    private $statuses = [
    	'active',
    	'inactive'
    ];

	public function getInterviewTypeStatusesAttribute()
	{
	    return $this->statuses;
	}
}
