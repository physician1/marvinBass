<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    use HasFactory;

    /**
     *
     * Attributes that are not mass assignable
     *
     * @var array
     */
    protected $guarded = ['id'];
}
