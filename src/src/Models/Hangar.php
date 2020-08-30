<?php


namespace App\Models;


class Hangar
{
    const MAX_AMOUNT_OF_AIRCRAFTS = 10;

    protected $aircrafts = [];

    public function addAircraft(Aircraft $aircraft)
    {
        if (count($this->aircrafts) < self::MAX_AMOUNT_OF_AIRCRAFTS) {
            $this->aircrafts[] = $aircraft;
        } else {
            throw new \Exception("Hangar is full");
        }
    }

    /**
     * @return Aircraft[]
     */
    public function getAircrafts(): array
    {
        return $this->aircrafts;
    }
}
