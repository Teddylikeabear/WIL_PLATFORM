<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1edd2dd8808b3f5bd0f1dbe699c25cca
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Techcodehive\\WorkintergratedlearningPlatform\\' => 45,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Techcodehive\\WorkintergratedlearningPlatform\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1edd2dd8808b3f5bd0f1dbe699c25cca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1edd2dd8808b3f5bd0f1dbe699c25cca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1edd2dd8808b3f5bd0f1dbe699c25cca::$classMap;

        }, null, ClassLoader::class);
    }
}
