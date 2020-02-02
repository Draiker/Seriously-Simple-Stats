<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite01fe7e38374bf2ca2d4137562decccc
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jaybizzle\\CrawlerDetect\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jaybizzle\\CrawlerDetect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaybizzle/crawler-detect/src',
        ),
    );

    public static $classMap = array (
        'SeriouslySimpleStats\\Classes\\All_Episode_Stats' => __DIR__ . '/../..' . '/php/classes/class-all-episode-stats.php',
        'SeriouslySimpleStats\\Classes\\Stats' => __DIR__ . '/../..' . '/php/classes/class-ssp-stats.php',
        'SeriouslySimpleStats\\Classes\\Stats_Hit' => __DIR__ . '/../..' . '/php/classes/class-ssp-stats-hit.php',
        'SeriouslySimpleStats\\Classes\\Stats_Upgrade' => __DIR__ . '/../..' . '/php/classes/class-ssp-stats-upgrade.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite01fe7e38374bf2ca2d4137562decccc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite01fe7e38374bf2ca2d4137562decccc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite01fe7e38374bf2ca2d4137562decccc::$classMap;

        }, null, ClassLoader::class);
    }
}