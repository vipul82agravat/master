<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4853a706ca2001fbfcdd7982336c55a5
{
    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\ORM' => 
            array (
                0 => __DIR__ . '/../..' . '/lib',
            ),
            'Doctrine\\DBAL' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/dbal/lib',
            ),
            'Doctrine\\Common' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/common/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit4853a706ca2001fbfcdd7982336c55a5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4853a706ca2001fbfcdd7982336c55a5::$classMap;

        }, null, ClassLoader::class);
    }
}
