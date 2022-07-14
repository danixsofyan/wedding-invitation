<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Wedding()
    {
        return $this->belongsTo(Wedding::class);
    }
}
