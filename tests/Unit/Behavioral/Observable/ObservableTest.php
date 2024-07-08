<?php

use App\Behavioral\Observer\Subscriber;
use App\Behavioral\Observer\Video;
use App\Behavioral\Observer\VideoObservable;
use App\Behavioral\Observer\VideoObserver;

describe('Observable video youtube', function () {
    it('should notify all subscribers', function () {

        $video = new Video('Video: Create Obsever Pattern');

        $anaObserver = new VideoObserver(new Subscriber('ana@email.com.br'));
        $mariaObserver = new VideoObserver(new Subscriber('maria@email.com.br'));
        $walmirObserver = new VideoObserver(new Subscriber('walmir@email.com.br'));
        $joaoObserver = new VideoObserver(new Subscriber('joao@email.com.br'));
        $videoObservable = new VideoObservable($video);
        $videoObservable->attach($anaObserver);
        $videoObservable->attach($mariaObserver);
        $videoObservable->attach($walmirObserver);
        $videoObservable->attach($joaoObserver);
        // remove observer from list
        $videoObservable->detach($mariaObserver);
        $videoObservable->notify();

        expect($videoObservable->video->title)->toBe('Video: Create Obsever Pattern');

    });
});