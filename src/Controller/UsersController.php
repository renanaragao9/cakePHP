<?php

namespace App\Controller;

Use App\Controller\AppController;
use App\Model\Table\UserTable;

/**
 * 
 */
class UsersController extends AppController
{
    public function index() {
        
        $usuarios = $this->Users->find()->all();

        $this->set(['usuarios' => $usuarios]);
    }
}
