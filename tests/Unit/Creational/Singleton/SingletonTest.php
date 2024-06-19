<?php

use App\Creational\Singleton\Singleton;

describe('Singleton', function () {
    
    it('Should be the same instance for two objects', function () {
        $firstInstance = Singleton::getInstance();
        $secondInstance = Singleton::getInstance();
        expect($firstInstance)->toBe($secondInstance);
    });
    
    it('Should throw error when try to create instance', function () {
        expect(function () {
            $instance = new Singleton();
        })->toThrow(Error::class);
    });
    
    it('Should throw error when try to clone', function () {
        expect(function () {
            $instance = Singleton::getInstance();
            $clone = clone $instance;
        })->toThrow(Error::class);
    });

    it('Should throw error when try to serialize', function () {
        expect(function () {
            $instance = Singleton::getInstance();
            $serialize = serialize($instance);
        })->toThrow(LogicException::class);
    });

    it('Should throw error when try to unserialize', function () {
        expect(function () {
            $instance = Singleton::getInstance();
            $serialize = serialize($instance);
            $unserialize = unserialize($serialize);
        })->toThrow(LogicException::class);
    });
});