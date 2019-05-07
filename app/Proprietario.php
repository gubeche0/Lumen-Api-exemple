<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'phone',
        'cnh'
    ];
}