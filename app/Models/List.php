<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class List_List extends Model
{
    protected $table = 'lists';
    public $timestamps = false;
    protected $fillable = ['name', 'email', 'password','login','surname','phone','gen'];
}
