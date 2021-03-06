<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54c82e6a999b7de11e9b04758ab527a6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54c82e6a999b7de11e9b04758ab527a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54c82e6a999b7de11e9b04758ab527a6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
