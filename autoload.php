<?php

function autoloadFile($filePath)
{
    if (is_readable($filePath)) {
        require_once $filePath;
    }
}

function autoloadAPIs($className)
{
    $filePath = __DIR__.'/src'.DIRECTORY_SEPARATOR.'api'.DIRECTORY_SEPARATOR.$className.'.php';

    autoloadFile($filePath);
}

function autoloadClasses($className)
{
    $filePath = __DIR__.'/src'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$className.'.php';

    autoloadFile($filePath);
}

function autoloadHelpers($className)
{
    $filePath = __DIR__.'/src'.DIRECTORY_SEPARATOR.'helper'.DIRECTORY_SEPARATOR.$className.'.php';

    autoloadFile($filePath);
}

spl_autoload_register('autoloadAPIs');
spl_autoload_register('autoloadClasses');
spl_autoload_register('autoloadHelpers');
