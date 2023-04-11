<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Event extends Model
{
    
    protected $fillable = ['title', 'description', 'start_time', 'end_time', 'location', 'photo'];
    protected $dates = ['start_time', 'end_time'];

    // public function members() {
    //     return $this->embedsMany('App\Models\Attendee');
    // }

    public function users()
    {
        return $this->belongsToMany(User::class, 'subscriptions', 'event_id', 'user_id')->withTimestamps();
    }

    public function photos()
    {
        return $this->hasMany(Gallerie::class);
    }
}
