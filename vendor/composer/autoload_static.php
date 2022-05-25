<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit743b7bee134f70a59b88528ba7b6068b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit743b7bee134f70a59b88528ba7b6068b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit743b7bee134f70a59b88528ba7b6068b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit743b7bee134f70a59b88528ba7b6068b::$classMap;

        }, null, ClassLoader::class);
    }
}