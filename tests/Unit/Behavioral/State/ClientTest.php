<?php

use App\Behavioral\State\Context\Context;
use App\Behavioral\State\Request\CreatedDoc;

describe('Client test', function() {
    it('testando state', function() {
        $states = [
            0 => 'created',
            1 => 'editing',
            2 => 'saved',
            3 => 'finished',
        ];
        $context = new Context(new CreatedDoc());
        while ($state = array_shift($states)) {
            echo "State: $state\n";
            switch ($state) {
                case 'created':
                    $context->init();
                    break;
                case 'editing':
                    $context->changeState();
                    $context->init();
                    break;
                case 'saved':
                    $context->changeState();
                    $context->init();
                    break;
                case 'finished':
                    $context->changeState();
                    $context->init();
                    break;
            }
        }
        
        expect($context->getState())->toBe('FinishedDoc');
    });
});