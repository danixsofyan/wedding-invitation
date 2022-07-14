<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Bride()
    {
        return $this->hasMany(Bride::class);
    }

    public function Detail()
    {
        return $this->hasMany(Detail::class);
    }

    public function Gift()
    {
        return $this->hasMany(Gift::class);
    }

    public function Rsvp()
    {
        return $this->hasMany(Rsvp::class);
    }

    public function Thank()
    {
        return $this->hasMany(Thank::class);
    }

    public function Wishes()
    {
        return $this->hasMany(Wishes::class);
    }
}
