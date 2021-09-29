<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4af8cdacf78c14437c29aa4ee49c62e
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4af8cdacf78c14437c29aa4ee49c62e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4af8cdacf78c14437c29aa4ee49c62e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf4af8cdacf78c14437c29aa4ee49c62e::$classMap;

        }, null, ClassLoader::class);
    }
}
