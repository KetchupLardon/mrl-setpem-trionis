<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit048dbe8987c2d92314f85dd8afa5b97c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Septem\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Septem\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit048dbe8987c2d92314f85dd8afa5b97c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit048dbe8987c2d92314f85dd8afa5b97c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
