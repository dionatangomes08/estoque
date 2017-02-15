<?php

namespace Domain\Comentario;

use Domain\User\User;

class ControllerTest extends \TestCase{
    public function testCreate(){
        
            //sets
            
            $header = $this->getHeaders();
            //dd($header);
            
            $data = [
                'id_user'=> '1',
                'responsavel' => 'Dionatan Gomes',
                'hora_comentario' => '02-15-2017',
                'new_coment' => 'POP Alarmado',
            ];
            
            
            $this->post('comentario',$data,$header);
            $this->seeStatusCode(200);
            $this->seejson([
                'responsavel' => $data['responsavel'],
            ]);
    }
}