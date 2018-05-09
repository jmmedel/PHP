<?php

function errorHandler($level, $message, $file, $line)
{
    throw new ErrorException($message, 0, $level, $file, $line);
}

set_error_handler('errorHandler');

function exceptionHandler($exception)
{
    echo 'Caught exception: ', $exception->getMessage();
}

set_exception_handler('exceptionHandler');

$i = 1 / 0;
