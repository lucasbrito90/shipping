<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CrumbTrailStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'description',
        'crumbs_trail_id'
    ];

    public function crumbsTrail(): BelongsTo
    {
        return $this->belongsTo(CrumbsTrail::class);
    }
}
