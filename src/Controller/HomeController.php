<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;

/**
 * Home Controller
 *
 */
class HomeController extends AppController
{
    public function index() {

        $connection = ConnectionManager::get('default');
        
        //$users = $connection->execute('select * from users')->fetchAll('obj');

        //$users = $connection->newQuery()->select('*')->from('users')->where(['id >' => 70])->execute()->fetchAll('obj');

        $connection->insert('users', [
            'firstName' => 'Juan',
            'lastName' => 'Victor',
            'email' => 'email@email.com.pt',
            'password' => password_hash('123', PASSWORD_DEFAULT)
        ]);

        $users = $connection->execute('select * from users')->fetchAll('obj');


        $name = 'Renan';
        $age = 41;

        $this->set(compact('users'));

        return $this->render('index', 'master');
    }
}
