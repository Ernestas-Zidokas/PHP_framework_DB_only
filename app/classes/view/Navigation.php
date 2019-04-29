<?php

namespace App\View;

class Navigation extends \Core\Page\View {

    public function __construct($data) {
        parent::__construct($data);
        $this->page['content'] = $this->render(ROOT_DIR . '/app/views/navigation.tpl.php');
    }

}
