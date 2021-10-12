<?php

namespace App\Models;

use Ignite\Crud\Models\Traits\HasMedia;
use Ignite\Crud\Models\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia as HasMediaContract;

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
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['image'];

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

    public function getFeaturedImageAttribute()
    {
        return $this->getMedia('image')->first();
    }

    public function getImagesAttribute()
    {
        return $this->getMedia('image');
    }
}
