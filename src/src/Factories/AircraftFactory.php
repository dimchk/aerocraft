<?php


namespace App\Factories;

use App\Models\AeropraktA24;
use App\Models\Boeing747;
use App\Models\CurtissNC4;

class AircraftFactory
{
    protected static $instance;

    const AEROPAKT_A24 = 'Aeroprakt A-24';
    const BOEING_747 = 'Boeing 747';
    const CURTISS_NC4 = 'Curtiss NC-4';

    public static $aircraftList = [
        'Aeroprakt A-24' => AeropraktA24::class,
        'Boeing 747' => Boeing747::class,
        'Curtiss NC-4' => CurtissNC4::class
    ];

    public static function getInstance(): AircraftFactory
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function generate($name)
    {
        if (array_key_exists($name, static::$aircraftList)) {
            return new static::$aircraftList[$name]();
        }
    }
}
