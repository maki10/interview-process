<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = [
    	'name',
		'interview_type_id',
		'office_id',
		'user_id',
		'length',
		'from',
		'to',
		'status',
    ];

    private $statuses = [
        'confirmed',
        'rejected'
    ];

    protected $dates = [
        'from',
        'to',
    ];

    public function getInterviewStatusesAttribute()
    {
        return $this->statuses;
    }

	public function setToAttribute($value)
    {
        $this->attributes['to'] = strtotime($value);
    }

	public function getToAttribute()
    {
        return \Carbon\Carbon::createFromTimestamp($this->attributes['to']);
    }

	public function setFromAttribute($value)
    {
        $this->attributes['from'] = strtotime($value);
    }

	public function getFromAttribute()
    {
        return \Carbon\Carbon::createFromTimestamp($this->attributes['from']);
    }

    public function office()
    {
    	return $this->belongsTo(Office::class);
    }

    public function type()
    {
    	return $this->belongsTo(InterviewType::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
