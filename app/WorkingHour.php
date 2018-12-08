<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
    protected $fillable = [
		'office_id',
		'from',
		'day',
		'to',
	];

	protected $dates = [
		'from', 
		'to'
	];

	private $days = [
		'monday',
		'tuesday',
		'wednesday',
		'thursday',
		'friday',
		'saturday',
		'saturday',
		'sunday',
	];

	public function getAvailableDaysAttribute()
	{
	    return $this->days;
	}

	public function setToAttribute($value)
    {
        $this->attributes['to'] = strtotime($value);
    }

	public function getToAttribute($value)
    {
        return $this->to->format('H:i');
    }

	public function setFromAttribute($value)
    {
        $this->attributes['from'] = strtotime($value);
    }

	public function getFromAttribute($value)
    {
        return $this->from->format('H:i');
    }

    public function office()
    {
    	return $this->belongsTo(Office::class);
    }
}
