<?php


namespace App\Services;


use App\Factories\AircraftFactory;
use App\Models\Hangar;

class HangarService
{
    /**
     * @var Hangar
     */
    protected $hangar;

    protected static $instance;

    public static function getInstance(): HangarService
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    protected function __construct()
    {
        $this->hangar = new Hangar();
        $aircraftFactory = new AircraftFactory();
        for ($n = 0; $n < 5; $n++) {
            $aircraft = $aircraftFactory->generate(AircraftFactory::AEROPAKT_A24);
            $this->hangar->addAircraft($aircraft);
        }
        for ($n = 0; $n < 3; $n++) {
            $aircraft = $aircraftFactory->generate(AircraftFactory::CURTISS_NC4);
            $this->hangar->addAircraft($aircraft);
        }
        for ($n = 0; $n < 2; $n++) {
            $aircraft = $aircraftFactory->generate(AircraftFactory::BOEING_747);
            $this->hangar->addAircraft($aircraft);
        }

    }

    public function getCurrentListOfPlanes()
    {
        return $this->hangar->getAircrafts();

    }
}
