<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * About Controller
 *
 */
class AboutController extends AppController
{
    public function index() {
        return $this->render('index', 'master');
    }
}
