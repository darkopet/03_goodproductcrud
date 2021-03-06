<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbbc8e4184b07ea61ab31151024e71e35
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

        spl_autoload_register(array('ComposerAutoloaderInitbbc8e4184b07ea61ab31151024e71e35', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbbc8e4184b07ea61ab31151024e71e35', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbbc8e4184b07ea61ab31151024e71e35::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
