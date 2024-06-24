<?php

use App\Behavioral\Mediator\Entity\GRUAirTrafficControl;
use App\Behavioral\Mediator\Type\Airbus;
use App\Behavioral\Mediator\Type\Boing;
use App\Behavioral\Mediator\Type\Cessna;

describe('Air Traffic test', function() {
    it('teste Air Traffic Boing', function() {
        
        $airTrafficControl = new GRUAirTrafficControl();

        $boing = new Boing($airTrafficControl);
        $airbus = new Airbus($airTrafficControl);
        $cessna = new Cessna($airTrafficControl);

        $airTrafficControl->addAirplane($boing);
        $airTrafficControl->addAirplane($airbus);
        $airTrafficControl->addAirplane($cessna);

        $boing->sendMessage("BOING: I'm flying!");

        expect($airbus->getMessage())
            ->toBe("Airbus received message: BOING: I'm flying!");
        expect($cessna->getMessage())
        ->toBe("Cessna received message: BOING: I'm flying!");

        
    });

    it('teste Air Traffic Cessna', function() {
        $airTrafficControl = new GRUAirTrafficControl();
        $boing = new Boing($airTrafficControl);
        $airbus = new Airbus($airTrafficControl);
        $cessna = new Cessna($airTrafficControl);

        $airTrafficControl->addAirplane($boing);
        $airTrafficControl->addAirplane($airbus);
        $airTrafficControl->addAirplane($cessna);

        $cessna->sendMessage("CESSNA: I'm flying!");

        expect($airbus->getMessage())
            ->toBe("Airbus received message: CESSNA: I'm flying!");
        expect($boing->getMessage())
        ->toBe("Boing received message: CESSNA: I'm flying!");
    });

    it('teste Air Traffic Airbus', function() {
        $airTrafficControl = new GRUAirTrafficControl();
        $boing = new Boing($airTrafficControl);
        $airbus = new Airbus($airTrafficControl);
        $cessna = new Cessna($airTrafficControl);

        $airTrafficControl->addAirplane($boing);
        $airTrafficControl->addAirplane($airbus);
        $airTrafficControl->addAirplane($cessna);

        $airbus->sendMessage("AIRBUS: I'm flying!");

        expect($boing->getMessage())
            ->toBe("Boing received message: AIRBUS: I'm flying!");
        expect($cessna->getMessage())
        ->toBe("Cessna received message: AIRBUS: I'm flying!");
    });
});