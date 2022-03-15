<?php

namespace Ohce\Tests\Application;


use Ohce\Application\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function ohceOfOneLetterIsTheSame()
    {
        $ohce = new Ohce();
        $response = $ohce->echoe('a');
        $this->assertEquals($response,'a');
    }
    /**
     * @test
     */
    public function ohceTwoLettersIsTheSame()
    {
        $ohce = new Ohce();
        $response = $ohce->echoe('oa');
        $this->assertEquals($response,'ao');
    }
    /**
     * @test
     */
    public function ohceOfPalindromeReturnsBonitaPalabra()
    {
        $ohce = new Ohce();
        $response = $ohce->echoe('oto');
        $this->assertEquals($response,'¡Bonita palabra!, oto');
    }
    /**
     * @test
     */
    public function ohceOfStopReturnsAdios()
    {
        $ohce = new Ohce();
        $response = $ohce->echoe('Stop!');
        $this->assertEquals($response,'Adios');
    }
}