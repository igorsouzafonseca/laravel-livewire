<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Agenda extends Model
{

    protected $table = 'agendas';

    protected $fillable = [
        'descricao', 'dataevento', 'horainicio', 'horafim'
    ];
}



