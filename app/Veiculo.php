<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'placa',
        'descricao',
        'cor',
        'km',
        'ano',
        'proprietario_id'
    ];
}