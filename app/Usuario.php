<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticable;

class Usuario extends Model implements \Illuminate\Contracts\Auth\Authenticable
{
    use Authenticable;
}
