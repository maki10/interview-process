<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = ['name'];

    public function workingHours()
    {
    	return $this->hasMany(WorkingHour::class);
    }
}
