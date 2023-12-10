<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Collection;

class Product extends Model
{
    use HasFactory;

    protected $with = ['pieces'];

    protected $fillable = [
        'name',
        'identifier',
        'description',
        'price',
        'is_done',
        'is_ready',
        'is_shipped',
        'type',
        'project_id'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function crumbsTrails(): HasMany
    {
        return $this->hasMany(CrumbsTrail::class);
    }

    public function pieces(): HasMany
    {
        return $this->hasMany(Piece::class);
    }

    public function stages(): MorphMany
    {
        return $this->morphMany(Stage::class, 'stageable');
    }

    public function type(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ProductType::find($value),
            set: fn($value) => $this->attributes['type'] = $value
        );
    }

    /**
     * @return Collection<Stage>
     */
    public function getActualStage(): Collection
    {
        $stages = collect();

        if ($this->pieces()->count() === 0) {
            $stages->push($this->stages());
            return $stages;
        }

        foreach ($this->pieces() as $piece) {
            $stages->push($piece->stages);
        }

        return $stages;
    }
}
