<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class VehiclesType extends Authenticatable
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicles_type';

    public $timestamps = false;
}
