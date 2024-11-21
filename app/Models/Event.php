<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    public function activities()
{
    return $this->hasMany(Activity::class);
}

protected $guarded = []; 

public function getDateAttribute($value)
{
    return date('d/m/Y', strtotime($value));
}

public function deleteWithActivities()
{
    $this->activities()->delete();  
    return $this->delete();
}
}
