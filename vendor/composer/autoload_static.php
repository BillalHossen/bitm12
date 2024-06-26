<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81090780c8435d23a9c41f6bb63391a6
{
    public static $files = array (
        '11f3a3ba5a5dd89228798832b46dd7df' => __DIR__ . '/../..' . '/App/Helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit81090780c8435d23a9c41f6bb63391a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81090780c8435d23a9c41f6bb63391a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit81090780c8435d23a9c41f6bb63391a6::$classMap;

        }, null, ClassLoader::class);
    }
}
