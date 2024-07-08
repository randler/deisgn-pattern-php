<?php

namespace App\Behavioral\Observer;

final class Subscriber
{
    public function __construct(
        public readonly string $email
    ) {}
}