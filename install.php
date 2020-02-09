<?php

$params = arguments($argv);

if (isset($params['theme'])) {
    exec('cd web/app/themes && composer create-project roots/sage ' . $params['theme']);
}

function arguments($argv) {
    $_ARG = array();
    foreach ($argv as $arg) {

        if (preg_match('@--([^=]+)=(.*)@',$arg,$reg)) {
            $_ARG[$reg[1]] = $reg[2];
        } elseif(preg_match('@-([a-zA-Z0-9])@',$arg,$reg)) {
            $_ARG[$reg[1]] = 'true';
        }

    }
    return $_ARG;
}
