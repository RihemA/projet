<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Idea extends Model
{
    protected $fillable = ['title', 'description', 'start_time', 'end_time', 'location', 'photo', 'user_id'];
    protected $dates = ['start_time', 'end_time'];

    public function photos()
    {
        return $this->hasMany(Gallerie::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
