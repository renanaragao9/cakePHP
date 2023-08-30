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

         $tablePosts = TableRegistry::getTableLocator()->get('Posts');
         $posts = $tablePosts->find()->contain(['Users']);

         $tableUsers = TableRegistry::getTableLocator()->get('Users');
         $query = $tableUsers->find();

        $users = $this->paginate($query, [
            'limit' => 8,
        ]);

  

         $this->set(compact('users'));

         $this->render('index', 'master');
        
    }
}
