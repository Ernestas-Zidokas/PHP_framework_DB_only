<?php

namespace App\Controller;

class Home extends \Core\Page\Controller {

    public function __construct() {
        parent::__construct();

        $view = new \Core\Page\View([
            'title' => 'Siandien miegam',
            'header' => 'Kregzdutes eina na'
        ]);

        $this->page['content'] = $view->render(ROOT_DIR . '/app/views/content.tpl.php');

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
    }

}
