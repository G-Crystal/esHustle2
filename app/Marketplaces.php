<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketplaces extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'marketplace', 'region', 'endpoint',
    ];

    protected $table = 'marketplaces';
}
