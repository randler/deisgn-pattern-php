<?php

namespace App\Behavioral\Observer;

use SplObserver;
use SplSubject;

class VideoObserver implements SplObserver
{

    public function __construct(
        private Subscriber $subscriber
    ) {}

    public function update(SplSubject $subject): void
    {
         printf(
           "%s has been notified of \"%s\"\n", 
            $this->subscriber->email, 
            $subject->video->title
        );
    }
}