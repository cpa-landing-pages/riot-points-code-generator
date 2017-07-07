<?php

// Generate code
$generator = codeGen('*', 'REP-EU2-3250-****************');

// Mask code for ajax
$code = substr_replace($generator , '????', -4);

// Allow Ajax to fetch code
die($code);

// Function to generate required code
function codeGen ($maskChar = '*', $mask = '****-****-****', $type = 'alphanumeric') {
    $generated= null;
    $types= [
        'alphanumeric'  => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
        'alphabetic'    => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'numeric'       => '0123456789'
    ];

    for ($i = 0, $l = strlen($mask); $i < $l; $i++) {
        if ($types[$type] && $mask[$i] === $maskChar) {
            $generated .= $types[$type][rand(0, strlen($types[$type]) - 1)];
        } else {
            $generated .= $mask[$i];
        }
    }

    return $generated;
}
