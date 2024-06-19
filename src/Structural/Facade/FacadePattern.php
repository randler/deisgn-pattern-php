<?php

namespace App\Structural\Facade;

use App\Structural\Facade\Converter\ConverterAVI;
use App\Structural\Facade\Converter\ConverterMP4;

class FacadePattern
{
    private $converterMP4;
    private $converterAVI;

    public function __construct(
        ConverterMP4 $converterMP4,
        ConverterAVI $converterAVI
    )
    {
        $this->converterMP4 = $converterMP4 ?: new ConverterMP4();
        $this->converterAVI = $converterAVI ?: new ConverterAVI();
    }

    public function convert(): string 
    {
        $result = "Converting file: ";
        $result .= $this->converterMP4->uploadFile();
        $result .= $this->converterMP4->convertMP4toAVI();
        $result .= $this->converterAVI->uploadFile();
        $result .= $this->converterAVI->convertAVItoMP4();
        return $result;
    }
}