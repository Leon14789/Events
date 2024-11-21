<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory, SoftDeletes;

    public function event()
{
    return $this->belongsTo(Event::class);
}

protected $guarded = []; 

public function getDateAttribute($value)
{
    return date('d/m/Y', strtotime($value));
}

public function getHoursAttribute($value)
{
    $time = strtotime($value);
    $hours = date('H', $time);
    $minutes = date('i', $time);
    return "{$hours}h {$minutes}min";
}

public function students()
{
    return $this->hasMany(Student::class);  
}
}
