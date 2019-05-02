<?php

namespace App\Objects;

class FormLogin extends \Core\Page\Objects\Form {

    public function __construct() {
        parent::__construct([
            'pre_validate' => [],
            'fields' => [
                'email' => [
                    'label' => 'Email',
                    'type' => 'text',
                    'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
                    'placeholder' => 'email@gmail.com',
                    'validate' => [
                        'validate_not_empty',
                        'validate_email'
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                    'placeholder' => '********',
                    'validate' => [
                        'validate_not_empty'
                    ]
                ]
            ],
            'validate' => [
                'validate_login'
            ],
            'buttons' => [
                'submit' => [
                    'text' => 'Login!'
                ]
            ],
            'callbacks' => [
                'success' => [],
                'fail' => []
            ]
        ]);
    }

}
