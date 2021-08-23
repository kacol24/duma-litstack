<?php

namespace App\Models;

use Ignite\Crud\Models\Traits\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia as HasMediaContract;
use Spatie\MediaLibrary\MediaCollections\Models\Media as SpatieMedia;

class Project extends Model implements HasMediaContract
{
    use HasMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['images', 'thumbnail'];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['media'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function getImagesAttribute()
    {
        return $this->getMedia('images');
    }

    public function getThumbnailAttribute()
    {
        return $this->getMedia('images')->first();
    }

    public function registerMediaConversions(SpatieMedia $media = null): void
    {
        $this->applyCrop($this->addMediaConversion('preview'), $media);

        $conversion = $this->addMediaConversion('thumbnail')
                           ->keepOriginalImageFormat()
                           ->fit(Manipulations::FIT_CROP, 500, 375)
                           ->sharpen(1);

        $this->applyCrop($conversion, $media);
    }
}
