<?php 

namespace App\Behavioral\Mediator\Type;

use App\Behavioral\Mediator\Abstract\Airplane;

class Airbus extends Airplane
{
    public function sendMessage(string $message): void
    {
        $this->airTrafficControl->notifyAirplane($this, $message);
    }

    public function receiveMessage(string $message): void
    {
        $this->message = sprintf('Airbus received message: %s', $message);
    }
}