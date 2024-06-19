<?php

use App\Structural\Facade\Converter\ConverterAVI;
use App\Structural\Facade\Converter\ConverterMP4;
use App\Structural\Facade\FacadePattern;

describe('Facade Pattern', function () {
    it('should convert file from MP4 to AVI and from AVI to MP4', function () {
        $converterMP4 = new ConverterMP4();
        $converterAVI = new ConverterAVI();
        $facadePattern = new FacadePattern($converterMP4, $converterAVI);
        $result = $facadePattern->convert();
        expect($result)->toBe('Converting file: Uploading file MP4: Converting MP4 to AVI: Uploading file AVI: Converting AVI to MP4: ');
    });
});