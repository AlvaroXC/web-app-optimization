<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe51228a6b65e456064d3298360bad51
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SimplePie\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SimplePie\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplepie/simplepie/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SimplePie' => 
            array (
                0 => __DIR__ . '/..' . '/simplepie/simplepie/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe51228a6b65e456064d3298360bad51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe51228a6b65e456064d3298360bad51::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfe51228a6b65e456064d3298360bad51::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfe51228a6b65e456064d3298360bad51::$classMap;

        }, null, ClassLoader::class);
    }
}
