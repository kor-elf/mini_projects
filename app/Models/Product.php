<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enums\Status;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'art',
        'name',
        'status',
        'data'
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', Status::AVAILABLE);
    }

}
