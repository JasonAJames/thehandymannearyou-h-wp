<?php

// autoload_framework_real.php @generated by Composer

class ComposerAutoloaderInit7443661ade57e96e45f72e5404bcf9f5
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit7443661ade57e96e45f72e5404bcf9f5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit7443661ade57e96e45f72e5404bcf9f5', 'loadClassLoader'));

        $classMap = require __DIR__ . '/autoload_framework_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }
        $loader->register(true);

        return $loader;
    }
}
