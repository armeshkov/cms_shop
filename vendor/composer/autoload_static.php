<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9f006c3dd4950289d81b8ad4c33381c
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'cms_shop\\' => 9,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'cms_shop\\' => 
        array (
            0 => __DIR__ . '/..' . '/cms_shop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite9f006c3dd4950289d81b8ad4c33381c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9f006c3dd4950289d81b8ad4c33381c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9f006c3dd4950289d81b8ad4c33381c::$classMap;

        }, null, ClassLoader::class);
    }
}
