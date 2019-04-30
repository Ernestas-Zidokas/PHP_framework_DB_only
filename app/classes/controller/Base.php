<?php

namespace App\Controller;

class Base extends \Core\Page\Controller {

    public function __construct() {
        parent::__construct();

        $nav_view = new \App\View\Navigation([
            [
                'link' => 'index.php',
                'title' => 'Index'
            ],
            [
                'link' => 'register.php',
                'title' => 'Register'
            ],
            [
                'link' => 'login.php',
                'title' => 'Login'
            ],
            [
                'link' => 'logout.php',
                'title' => 'Logout'
            ]
        ]);

        $this->page['header'] = $nav_view->render();

        $footer_view = new \App\View\Footer([
            [
                'name' => 'Kilimai ant sienos',
                'contacts' => ' 86666666'
            ]
        ]);

        $this->page['footer'] = $footer_view->render();
    }

}
