<?php
namespace app;

use Illuminate\Database\Eloquent\Model;

class Alga extends Model
{
    protected $table = 'alga';

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