<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd59458292f9b4f267866a85cbe43ed3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd59458292f9b4f267866a85cbe43ed3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd59458292f9b4f267866a85cbe43ed3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd59458292f9b4f267866a85cbe43ed3::$classMap;

        }, null, ClassLoader::class);
    }
}
