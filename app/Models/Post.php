<?php

namespace App\Models;

use Ignite\Crud\Models\Traits\HasMedia;
use Ignite\Crud\Models\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia as HasMediaContract;
use Spatie\MediaLibrary\MediaCollections\Models\Media as SpatieMedia;

class Post extends Model implements HasMediaContract
{
    use HasMedia, Sluggable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'is_active',
        'is_featured',
        'published_at',
    ];

    protected $casts = [
        'is_active'    => 'boolean',
        'is_featured'  => 'boolean',
        'published_at' => 'datetime',
    ];

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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopePublished($query)
    {
        return $query->whereNull('published_at')->orWhere('published_at', '<=', now());
    }

    public function scopeWhereSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }

    public function getThumbnailAttribute()
    {
        return $this->getMedia('images')->first();
    }

    public function getImagesAttribute()
    {
        return $this->getMedia('images');
    }

    public function registerMediaConversions(SpatieMedia $media = null): void
    {
        $this->applyCrop($this->addMediaConversion('preview'), $media);

        $conversion = $this->addMediaConversion('thumbnail')
                           ->keepOriginalImageFormat()
                           ->fit(Manipulations::FIT_CROP, 1300, 650);
        $this->applyCrop($conversion, $media);
    }
}
