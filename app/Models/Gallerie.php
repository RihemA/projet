<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Gallerie extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'gallery_photos';

    protected $fillable = [
        'filename',
        'event_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
