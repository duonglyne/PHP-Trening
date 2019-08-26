<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit800089d604f898cde0a2b04c88c6f828
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AHT\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AHT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit800089d604f898cde0a2b04c88c6f828::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit800089d604f898cde0a2b04c88c6f828::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}