<?php
namespace Domain\Auth;

use Domain\User\User;

class ControllerTest extends \TestCase
{
    
    public function testLogin(){
        //define as busca
        $data = [
          'username' => 'gomes08',
          'password' => '231745',
        ];
        
        $user = $data;
        $user['password'] = bcrypt($user['password']);
        $user['email'] = 'teste@teste.com';
        factory(User::class)->create($user);
        
        $this->post('auth/login', $data);
        
        //Verificações
        $this->seeStatusCode(200);
        $this->seejson([
            'username'=>'gomes08',
        ]);
    }
    
        public function testLoginWithEmail(){
        //define as busca
        $data = [
          'username' => 'teste@teste.com',
          'password' => '231745',
        ];
        
        $user = [
            'username'=>'gomes08',
            'password'=>bcrypt($data['password']),
            'email' => 'teste@teste.com',
        ];
        
        factory(User::class)->create($user);
        
        $this->post('auth/login', $data);
        
        //Verificações
        $this->seeStatusCode(200);
        $this->seejson([
            'username'=>'gomes08',
        ]);
    }
    public function testCantLogin(){
        $data=[
          'username' => uniqid(),
          'password' => 'teste',
        ];
        
        $this->post('auth/login', $data);
        
        $this->seeStatusCode(401);
    }
}