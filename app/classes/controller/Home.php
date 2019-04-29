<?php

namespace App\Controller;

class Home extends \Core\Page\Controller {

    public function __construct() {
        parent::__construct();
        $this->page['content'] = 'Kregzdutes eina na';
        $view = new \Core\Page\View(['title' => 'Siandien miegam']);
        $this->page['content'] = $view->render(ROOT_DIR . '/app/views/content.tpl.php');
    }

}
