<?php


namespace App\Models;


class AeropraktA24 extends Aircraft
{
    protected static $hasWheels = true;

    protected static $waterTakeOff = true;

    protected static $waterLand = true;

    protected static $flyRestriction = ['Bad weather', 'Night'];

    public function takeoff(): void
    {
        // TODO: Implement takeoff() method.
    }

    public function land(): void
    {
        // TODO: Implement land() method.
    }

    public function fly(): void
    {
        // TODO: Implement fly() method.
    }
}
