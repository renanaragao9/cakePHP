<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AdminUsers Controller
 *
 */
class AdminUsersController extends AppController
{
    public function index() {
        var_dump('list users in admin');
        die();
    }

    public function show($id) {
        var_dump('list user with id ' . $id);
        die();
    }
}
