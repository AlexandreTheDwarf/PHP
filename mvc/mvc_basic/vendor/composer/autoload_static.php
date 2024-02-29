<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9915308ea3fc55ce2b67ba5930996f9d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9915308ea3fc55ce2b67ba5930996f9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9915308ea3fc55ce2b67ba5930996f9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9915308ea3fc55ce2b67ba5930996f9d::$classMap;

        }, null, ClassLoader::class);
    }
}
