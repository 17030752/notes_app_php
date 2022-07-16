<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0eae4d6f2a10722e4fe7c5b3472d9e2
{
    public static $prefixLengthsPsr4 = array (
        1 => 
        array (
            '17030752\\Notes\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '17030752\\Notes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0eae4d6f2a10722e4fe7c5b3472d9e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0eae4d6f2a10722e4fe7c5b3472d9e2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf0eae4d6f2a10722e4fe7c5b3472d9e2::$classMap;

        }, null, ClassLoader::class);
    }
}
