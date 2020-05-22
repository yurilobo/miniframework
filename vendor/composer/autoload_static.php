<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9da9186ed813d165d019782e742fd4a7
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9da9186ed813d165d019782e742fd4a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9da9186ed813d165d019782e742fd4a7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
