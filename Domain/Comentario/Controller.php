<?php

namespace Domain\Comentario;

use Domain\Comentario\Request\Store;

class Controller extends \Domain\Core\Http\Controller{
    
    public function store(Store $request){
        $coment = new Comentario;
        $coment->fill($request->all());
        $coment->responsavel = $request->responsavel;
        $coment->save();
        
        return $coment;
    
        
    }
    
}