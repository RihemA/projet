<?php
namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Gallerie extends Model
{
    protected $fillable = ['event_id', 'photo'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
