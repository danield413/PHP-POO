<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44a8a92c27a03b22455d07d2075bea69
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Danieldiaz\\Poo\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Danieldiaz\\Poo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit44a8a92c27a03b22455d07d2075bea69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit44a8a92c27a03b22455d07d2075bea69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit44a8a92c27a03b22455d07d2075bea69::$classMap;

        }, null, ClassLoader::class);
    }
}
