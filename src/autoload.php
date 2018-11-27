<?php

// Register controllers & models

spl_autoload_register(function($className) {
    $className = ltrim($className, '\\');

    if (strpos($className, '\\') !== false) {
        if (strpos($className, 'Slimvc') === false) {
            return false;
        }

        $className = str_replace(
            ['Controller\\', 'Model\\'], 
            ['Controllers\\', 'Models\\'], 
            $className
        );

        $lastNamespacePosition = strrpos($className, '\\');
        $namespace = substr($className, 0, $lastNamespacePosition);
        $className = substr($className, $lastNamespacePosition + 1);
        $filename  = __DIR__ . '/' . str_replace('\\', '/', $namespace) . '/';
        $filename .= str_replace('_', '/', $className) . '.php';

        $includePath = str_replace('Slimvc/', '', $filename);

        if (is_readable($includePath)) {
            require $includePath;
        }
    }
});