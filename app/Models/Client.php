<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'login',
        'password',
        'email',
        'name',
        'surname',
        'phone',
        'gen'
    ];
    public $timestamps = false;
}

