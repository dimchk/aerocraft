<?php


namespace App\Models;


use JsonSerializable;

abstract class Aircraft implements FlyableInterface, JsonSerializable
{


    protected static $hasWheels = false;

    protected static $waterLand = false;

    protected static $waterTakeOff = false;

    protected static $flyRestriction = [];

    abstract public function takeoff(): void;

    abstract public function land(): void;

    abstract public function fly(): void;

    public static function hasWheels(): bool
    {
        return static::$hasWheels;
    }

    public static function canLandOnWater(): bool
    {
        return static::$waterLand;
    }

    public static function canTakeoffOnWater(): bool
    {
        return static::$waterTakeOff;
    }

    public static function hasFlyRestriction(): bool
    {
        return !empty(static::hasFlyRestriction());
    }

    public function getFlyRestriction(): array
    {
        return static::$flyRestriction;
    }

    public function jsonSerialize()
    {
        return 'Aircraft - ' . (new \ReflectionClass($this))->getShortName(). ' id:' . spl_object_id($this);
    }

}
