<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitaaa938ed4d8bbedfb7824d2c2a739d60
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

        spl_autoload_register(array('ComposerAutoloaderInitaaa938ed4d8bbedfb7824d2c2a739d60', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitaaa938ed4d8bbedfb7824d2c2a739d60', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitaaa938ed4d8bbedfb7824d2c2a739d60::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
