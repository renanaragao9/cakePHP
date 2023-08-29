<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

/**
 * Home Controller
 *
 */
class HomeController extends AppController
{
    public function index() {

         $tableUsers = TableRegistry::getTableLocator()->get('Users');
         
         $users = $tableUsers->query();

         $userEntity = $tableUsers->newEmptyEntity();
         $userEntity->firstName = 'Alexandre';
         $userEntity->lastName = 'Cardoso';
         $userEntity->email = 'email@teste.com';
         $userEntity->password = password_hash('123', PASSWORD_DEFAULT);
         
         $saved =  $tableUsers->save($userEntity);

         $this->set(compact('users'));

         $this->render('index', 'master');
        
    }
}
