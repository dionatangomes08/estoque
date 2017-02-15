<?php

namespace Domain\Comentario\Request;

class Store extends \Domain\Core\Http\Request{
    public function rules(){
        return[
            'id_registro'=>'required',
            'id_user'=>'required',
            'responsavel'=>'required|max:45',
            'hora_comentario'=>'date|date_format:Y-m-d',
            'new_coment'=>'required'
        ];
    }
}