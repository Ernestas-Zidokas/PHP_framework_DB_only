<?php

namespace App\Controller;

class Home extends Base {

    public function __construct() {
        parent::__construct();

        $form = new \App\Objects\FormLogin();
        $form->process();
        $this->page['content'] = $form->render();
    }

}
