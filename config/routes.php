<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

return static function (RouteBuilder $routes) {

    
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index'], 
        ['_name' => 'home.index'])->setMethods(['get']
    );
    

    $routes->scope('/', function(RouteBuilder $routes) {
        
        $routes->get('/about', ['controller' => 'About', 'action' => 'index'], 'about.index');

        $routes->get('/product/{id}', ['controller' => 'Product', 'action' => 'show'], 'product.show')->setPatterns(['id' => '[0-9]+']);

        $routes->connect('/clube/*', ['controller' => 'Clube', 'action' => 'index']);
    });
    

    $routes->scope('/admin', function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Admin', 'action' => 'index'], ['_name' => 'admin.index']);
        $routes->connect('/users', ['controller' => 'AdminUsers', 'action' => 'index'], ['_name' => 'adminUsers.index']);
        $routes->connect('/users/{id}', ['controller' => 'AdminUsers', 'action' => 'show'], ['_name' => 'adminUsers.show', 'pass' => ['id'], 'id' => '[0-9]+' ]);
    });


};
