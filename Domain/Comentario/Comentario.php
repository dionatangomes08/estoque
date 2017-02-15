<?php

namespace Domain\Comentario;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_registro','id_user', 'responsavel', 'hora_comentario','new_coment',
    ];
}