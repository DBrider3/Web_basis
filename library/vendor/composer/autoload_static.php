<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e5140d4e8b2c647c15e3a9ee37a923b
{
    public static $prefixesPsr0 = array (
        'd' => 
        array (
            'dflydev\\markdown' => 
            array (
                0 => __DIR__ . '/..' . '/dflydev/markdown/src',
            ),
        ),
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit0e5140d4e8b2c647c15e3a9ee37a923b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
