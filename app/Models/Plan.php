<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Attributes that are not mass assignable
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     *
     * Custom attributes
     *
     * @var array
     */
    protected $appends = ['name'];

    public function getNameAttribute(): string
    {
        return $this->title." GH₵ ".number_format($this->amount, 2);
    }
}
