<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $with = ['videos'];

    public function videos()
    {
        return $this->hasMany(Video::class)->orderBy('episode_number', 'asc');
    }
}
