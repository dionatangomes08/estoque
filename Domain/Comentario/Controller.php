<?php

namespace Domain\Comentario;
use Illuminate\Http\Request;

class Controller extends \Domain\Core\Http\Controller{
    
    public function store(Request $request){
        $coment = new Comentario;
        $coment->responsavel = $request->responsavel;
        $coment->save();
        
        return $coment;
    
        
    }
    
}