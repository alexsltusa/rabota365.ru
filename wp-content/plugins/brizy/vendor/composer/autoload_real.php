<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit363d0b474eeb7ecc5397d66e29b970df
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

        spl_autoload_register(array('ComposerAutoloaderInit363d0b474eeb7ecc5397d66e29b970df', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit363d0b474eeb7ecc5397d66e29b970df', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit363d0b474eeb7ecc5397d66e29b970df::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
