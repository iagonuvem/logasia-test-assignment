<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class VehiclesAvailability extends Authenticatable
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicles_availability';

    public $timestamps = false;
}
