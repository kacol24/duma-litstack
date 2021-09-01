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
    protected $fillable = [
        'title',
        'location',
        'description',

        'project_category_id',
        'distributor_id',
        'is_active'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['images', 'thumbnail', 'distributor_name', 'category_name'];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['media'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getDistributorNameAttribute()
    {
        return optional($this->distributor)->name;
    }

    public function getCategoryNameAttribute()
    {
        return optional($this->category)->title;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order_column', 'asc');
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

    public function distributor()
    {
        return $this->belongsTo(Distributor::class);
    }

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }
}
