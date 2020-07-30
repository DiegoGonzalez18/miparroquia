<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioEstandar extends Model
{
    protected $table="horario_estandar";
    //
    protected $fillable=['dia','hora'];
}
