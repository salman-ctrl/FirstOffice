<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfficeSpace extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'thumbnail',
        'is_open',
        'is_full_booked',
        'price',
        'duration',
        'address',
        'about',
        'slug',
        'city_id',
    ];

    public function photos(): HasMany
    {
        return $this->hasMany(OfficeSpacePhoto::class);
    }

    public function benefits(): HasMany
    {
        return $this->hasMany(OfficeSpaceBenefit::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }


}
