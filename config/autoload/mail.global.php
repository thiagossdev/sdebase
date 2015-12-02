<?php
return array(
    'mail' => array(
        'options' => array(
            'sender' => 'sendmail',
            'from-email' => 'tss@bootstrap',
            'from-name' => 'TSS',
        ),
        'transport' => array(
            'options' => array(
                'name' => 'localhost',
                'host' => 'localhost',
                'port' => '465',
                'connection_class'  => 'login',
                'connection_config' => array(
                    'username' => 'root',
                    'password' => '',
                    'ssl' => 'ssl'
                ),
            ),
        ),
    ),
);