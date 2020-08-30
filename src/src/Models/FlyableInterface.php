<?php


namespace App\Models;


interface FlyableInterface
{
    public function takeoff(): void;

    public function land(): void;

    public function fly(): void;

}
