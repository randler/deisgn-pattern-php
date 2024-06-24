<?php

namespace App\Behavioral\Mediator\Entity;

use App\Behavioral\Mediator\Abstract\Airplane;
use App\Behavioral\Mediator\Interface\AirTrafficControl;
use SplObjectStorage;

final class GRUAirTrafficControl implements AirTrafficControl
{
    private SplObjectStorage $airplanes;

    public function __construct()
    {
        $this->airplanes = new SplObjectStorage();
    }

    public function addAirplane(Airplane $airplane): void
    {
        $this->airplanes->attach($airplane);
    }

    public function notifyAirplane(Airplane $airplaneReceiver, string $message): void
    {
        while ($this->airplanes->valid()) {
            $airplane = $this->airplanes->current();
            if ($airplane !== $airplaneReceiver) {
                $airplane->receiveMessage($message);
            }
            $this->airplanes->next();
        }
    }
}