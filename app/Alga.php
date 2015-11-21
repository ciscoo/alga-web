<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alga extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'alga';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'total_chla',
        'cyano_chla',
        'sd_value',
        'do_value',
        'lux',
        'pbot',
        'depth',
        'surtemp',
        'bottemp',
        'lat',
        'long'
    ];
}