<?php

namespace App\Behavioral\Mediator\Interface;

use App\Behavioral\Mediator\Abstract\Airplane;

interface AirTrafficControl
{
    public function addAirplane(Airplane $airplane): void;
    public function notifyAirplane(Airplane $airplane, string $message): void;
}