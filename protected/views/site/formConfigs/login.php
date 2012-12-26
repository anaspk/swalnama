<?php
    return array(
        'title' => 'Login',
        'showErrorSummary' => true,
        'elements' => array(
            'Please fill out the following form with your login credentials:',
            'username' => array(
                'type' => 'text',
            ),
            'password' => array(
                'type' => 'password',
            ),
            'rememberMe' => array(
                'type' => 'checkbox',
            ),
        ),
        'buttons' => array(
            'login' => array(
                'type' => 'submit',
                'layoutType' => 'primary',
                'label' => 'Login',
            ),
            'reset' => array(
                'type' => 'reset',
                'label' => 'Reset',
            ),
        ),
    );
?>
