<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0958b93e96bff94531a991cd8926c8b5
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Realtime\\Conversa\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Realtime\\Conversa\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0958b93e96bff94531a991cd8926c8b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0958b93e96bff94531a991cd8926c8b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0958b93e96bff94531a991cd8926c8b5::$classMap;

        }, null, ClassLoader::class);
    }
}
