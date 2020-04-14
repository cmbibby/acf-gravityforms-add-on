<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7db054d835facd156ee9be8410739fa8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'ACFGravityformsField\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'ACFGravityformsField\\' => 
        array (
            0 => __DIR__ . '/../..' . '/resources',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7db054d835facd156ee9be8410739fa8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7db054d835facd156ee9be8410739fa8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
