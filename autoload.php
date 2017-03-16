<?php

function autoloadFile($filePath)
{
    if (is_readable($filePath)) {
        require_once $filePath;
    } else {
        strstr();
    }
}

function autoloadAPIs($className)
{
    $filePath = 'api'.DIRECTORY_SEPARATOR.$className.'.php';

    autoloadFile($filePath);
}

function autoloadClasses($className)
{
    $filePath = 'classes'.DIRECTORY_SEPARATOR.$className.'.php';

    autoloadFile($filePath);
}

function autoloadApiHelpers($className)
{
    $filePath = 'helper'.DIRECTORY_SEPARATOR.$className.'.php';

    autoloadFile($filePath);
}

spl_autoload_register('autoloadAPIs');
spl_autoload_register('autoloadClasses');
spl_autoload_register('autoloadHelpers');
