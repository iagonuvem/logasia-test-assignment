<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Vehicles extends Authenticatable
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicles';

    public $timestamps = false;
}
