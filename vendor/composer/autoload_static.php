<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite24aac21d055a4098bd8199dac0c8efd
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bitm\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bitm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite24aac21d055a4098bd8199dac0c8efd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite24aac21d055a4098bd8199dac0c8efd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}