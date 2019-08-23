<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb73ca50a2c852e9cf03dbd891071c63e
{
    public static $classMap = array (
        'Classes\\Elements\\Corruption' => __DIR__ . '/../..' . '/Classes/Elements/Corruption.php',
        'Classes\\Elements\\Earth' => __DIR__ . '/../..' . '/Classes/Elements/Earth.php',
        'Classes\\Elements\\Element' => __DIR__ . '/../..' . '/Classes/Elements/Element.php',
        'Classes\\Elements\\Fire' => __DIR__ . '/../..' . '/Classes/Elements/Fire.php',
        'Classes\\Elements\\Wind' => __DIR__ . '/../..' . '/Classes/Elements/Wind.php',
        'Classes\\Races\\Dwarf' => __DIR__ . '/../..' . '/Classes/Races/Dwarf.php',
        'Classes\\Races\\Elf' => __DIR__ . '/../..' . '/Classes/Races/Elf.php',
        'Classes\\Races\\Human' => __DIR__ . '/../..' . '/Classes/Races/Human.php',
        'Classes\\Races\\Race' => __DIR__ . '/../..' . '/Classes/Races/Race.php',
        'Classes\\Units\\Unit' => __DIR__ . '/../..' . '/Classes/Units/Unit.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb73ca50a2c852e9cf03dbd891071c63e::$classMap;

        }, null, ClassLoader::class);
    }
}
