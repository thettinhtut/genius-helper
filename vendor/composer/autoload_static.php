<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite95c238c16ef3bd35d7190f51ab2d160
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Genius\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Genius\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite95c238c16ef3bd35d7190f51ab2d160::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite95c238c16ef3bd35d7190f51ab2d160::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
