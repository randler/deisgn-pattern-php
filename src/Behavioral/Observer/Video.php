<?php 

namespace App\Behavioral\Observer;

final class Video
{
    

    public function __construct(
        public readonly string $title
    )
    {}
}