<?php



function setInternalServerError($errno, $errstr, $errfile, $errline){
    echo '<h1>Error</h1>';

    switch ($errno) {
        case E_USER_ERROR:
            echo '<strong>ERROR</strong> [' . $errno . ']' . $errstr . "<br/>\n";
            echo 'Fatal error on line ' . $errline . ' in file ' . $errfile . '.'; 
            break;

        case E_USER_WARNING:
            echo '<strong>WARNING</strong> [' . $errno . ']' . $errstr . "<br/>\n";
            break;

        case E_USER_NOTICE:
            echo '<strong>NOTICE</strong> [' . $errno . ']' . $errstr . "<br/>\n";
            break;

        default:
            echo '<strong>UNKNOWN ERROR TYPE</strong> [' . $errno . ']' . $errstr . "<br/>\n";
            break;
    }

    echo '<ul>';
    foreach(debug_backtrace() as $error){
            if(!empty($error['file'])){
                echo '<li>' . $error['file'] . ':' . $error['line'] . '</li>';
                
            }
    }
    echo '</ul>';

    exit;
    
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');