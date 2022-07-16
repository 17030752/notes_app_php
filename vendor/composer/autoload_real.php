<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf0eae4d6f2a10722e4fe7c5b3472d9e2
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitf0eae4d6f2a10722e4fe7c5b3472d9e2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf0eae4d6f2a10722e4fe7c5b3472d9e2', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf0eae4d6f2a10722e4fe7c5b3472d9e2::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}