<?php

namespace Domain\Comentario;

use Domain\User\User;

class ControllerTest extends \TestCase{
    public function testCreate(){
        
            //sets
            
            $header = $this->getHeaders();
            //dd($header);
            
            $data = [
                'id_registro'=>'1',
                'id_user'=> '1',
                'responsavel' => 'Dionatan Gomes',
                'hora_comentario' => '2017-02-15',
                'new_coment' => 'POP Alarmado',
            ];
            
            
            $this->post('comentario',$data,$header);
            //dd($this->response->getContent());
            $this->seeStatusCode(200);
            $this->seejson([
                'responsavel' => $data['responsavel'],
            ]);
    }
}