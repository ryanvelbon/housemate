<?php

namespace App\Models;

use App\Enums\BedType;
use App\Enums\PlaceType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'property_id',
        'title',
        'description',
        'place_type',
        'bed_type',
        'price_per_night',
        'price_per_month',
        'min_n_nights',
        'max_n_nights',
        'instant_book',
        'self_checkin',
        'feat_img',
    ];

    protected $casts = [
        'place_type' => PlaceType::class,
        'bed_type' => BedType::class,
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
