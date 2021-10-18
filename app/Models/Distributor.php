<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Distributor extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'city_id', 'description'];

    protected $with = [
        'city',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
