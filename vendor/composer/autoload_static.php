<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ac2bb043939069d21ced1678106b37d
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phppostgres\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phppostgres\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'phppostgres\\Connection' => __DIR__ . '/../..' . '/app/connection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ac2bb043939069d21ced1678106b37d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ac2bb043939069d21ced1678106b37d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ac2bb043939069d21ced1678106b37d::$classMap;

        }, null, ClassLoader::class);
    }
}