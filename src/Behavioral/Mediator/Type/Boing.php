<?php 

namespace App\Behavioral\Mediator\Type;

use App\Behavioral\Mediator\Abstract\Airplane;

class Boing extends Airplane
{
    public function sendMessage(string $message): void
    {
        $this->airTrafficControl->notifyAirplane($this, $message);
    }

    public function receiveMessage(string $message): void
    {
        $this->message = sprintf('Boing received message: %s', $message);
    }
}