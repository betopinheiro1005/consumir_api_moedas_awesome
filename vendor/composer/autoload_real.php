<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit743b7bee134f70a59b88528ba7b6068b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit743b7bee134f70a59b88528ba7b6068b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit743b7bee134f70a59b88528ba7b6068b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit743b7bee134f70a59b88528ba7b6068b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
