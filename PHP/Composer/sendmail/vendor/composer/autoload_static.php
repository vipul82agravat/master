<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita98222c6018bc88d20f3c41d6468c445
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita98222c6018bc88d20f3c41d6468c445::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita98222c6018bc88d20f3c41d6468c445::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita98222c6018bc88d20f3c41d6468c445::$classMap;

        }, null, ClassLoader::class);
    }
}
