<?php

namespace App\Tests\Services;

use App\Factories\AircraftFactory;
use App\Models\Hangar;
use App\Services\HangarService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HangarServiceTest extends WebTestCase
{

    public function setUp(): void
    {
        self::bootKernel();
        parent::setUp();

    }

    public function testAddAircraftToHangar()
    {
        $aircraft = (new AircraftFactory())->generate(AircraftFactory::BOEING_747);
        $hangar = new Hangar();
        $hangar->addAircraft($aircraft);
        $this->assertNotEmpty($hangar->getAircrafts());
        $this->assertInstanceOf(AircraftFactory::$aircraftList[AircraftFactory::BOEING_747],
            $hangar->getAircrafts()[0]);
    }

    public function testAmountOfAircraftInHangar()
    {
        $hangarService = HangarService::getInstance();
        $this->assertEquals(10, count($hangarService->getCurrentListOfPlanes()));
    }

}
