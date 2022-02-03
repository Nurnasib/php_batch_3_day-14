<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb15eccc71d7599b0e22a40a6c6acc7c1
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb15eccc71d7599b0e22a40a6c6acc7c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb15eccc71d7599b0e22a40a6c6acc7c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb15eccc71d7599b0e22a40a6c6acc7c1::$classMap;

        }, null, ClassLoader::class);
    }
}
