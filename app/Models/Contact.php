<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'telephone',
        'social_media',
        'cellphone',
        'email',
        'fax',
        'website',
        'position',
        'department',
        'languages',
        'company_id',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function socialMedias(): HasMany
    {
        return $this->hasMany(SocialMedia::class);
    }

    public function languages(): HasMany
    {
        return $this->hasMany(Language::class);
    }
}
