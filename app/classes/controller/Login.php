<?php

namespace App\Controller;

class Login extends Base {

    public function __construct() {
        parent::__construct();

        $form = new \App\Objects\Form\Login();
        $form->process();
        $this->page['content'] = $form->render();
    }

}
