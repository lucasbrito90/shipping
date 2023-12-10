<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CrumbsTrail extends Model
{
    use HasFactory;

    protected $fillable = [
        'who',
        'where',
        'when',
        'why',
        'status',
        'description',
        'product_id'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function sector(): HasOne
    {
        return $this->hasOne(Sector::class);
    }

    public function crumbsTrailStatus(): HasOne
    {
        return $this->hasOne(CrumbTrailStatus::class);
    }
}
