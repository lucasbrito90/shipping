<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'crumbs_trail_id'
    ];

    public function crumbsTrail(): BelongsTo
    {
        return $this->belongsTo(CrumbsTrail::class);
    }
}
