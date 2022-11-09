<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * 
 */
class UsersController extends AppController
{
	
	public function index()
	{
		$this->paginate = [
        	'limit' => 3,
        	'order' => [
        		'Users.id' => 'desc',
        	]
        ];
        $usuarios = $this->paginate($this->Users);
		//$usuario = "Cesar";
		//$this->set(['usuarios' => $usuario]);
		///$usuarios = $this->Users->find()->all();
		//$this->set(['usuarios' => $usuarios]);
		$this->set(compact('usuarios'));
	}

	public function add()
	{
		$user = $this->Users->newEntity();
		if($this->request->is('post')){
			$user = $this->Users->patchEntity($user, $this->request->getData());
			if($this->Users->save($user)){
				$this->Flash->success(__('Usuário cadastrado com sucesso'));
				return $this->redirect(['action' => 'index']);
			}else{
				$this->Flash->error(__('Usuário não foi cadastrado com sucesso'));
			}
		}
		$this->set(compact('user'));
	}
}