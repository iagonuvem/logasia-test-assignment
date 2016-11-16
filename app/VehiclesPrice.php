<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class VehiclesPrice extends Authenticatable
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicles_price';

    public $timestamps = false;
}
