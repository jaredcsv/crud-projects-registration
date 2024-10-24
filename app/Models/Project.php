<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Project extends Model
{
    // Specify which attributes should be mass assignable
    protected $fillable = [
        'project_name',
        'funding_source',
        'planned_amount',
        'sponsored_amount',
        'own_funds',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($project) {
            $project->user_id = auth()->id();
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}