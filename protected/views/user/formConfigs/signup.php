<?php
    return array(
        'title' => 'Sign Up',
        'showErrorSummary' => true,
        'elements' => array(
            'username' => array(
                'type' => 'text',
            ),
            'password' => array(
                'type' => 'password',
            ),
            'firstName' => array(
                'type' => 'text',
            ),
            'lastName' => array(
                'type' => 'text',
            ),
            'emailAddress' => array(
                'type' => 'text',
            ),
            'dateOfBirth' => array(
                'type' => 'date',
                'append' => '<i class="icon-calendar"></i>',
                'options' => array(
                    'format' => 'yyyy-mm-dd',
                ),
            ),
            'gender' => array(
                'type' => 'dropdownlist',
                'items' => User::model()->genderOptions,
            ),
            'country' => array(
                'type' => 'dropdownlist',
                'items' => User::model()->countries,
            ),
        ),
        'buttons' => array(
            'signup' => array(
                'type' => 'submit',
                'layoutType' => 'primary',
                'label' => 'Sign Up',
            ),
            'reset' => array(
                'type' => 'reset',
                'label' => 'Reset',
            ),
        ),
    );

?>
