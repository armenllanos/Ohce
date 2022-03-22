<?php

namespace Ohce\Tests\Application;


use Mockery;
use Ohce\Application\DateComparator;
use Ohce\Application\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @setUp
     * */
    protected function setUp(): void
    {
        parent::setUp();
        $this->ohce = new Ohce();
    }
    /**
     * @test
     */
    public function ohceOfOneLetterIsTheSame()
    {

        $response = $this->ohce->echoe('a');
        $this->assertEquals($response,'a');
    }
    /**
     * @test
     */
    public function ohceTwoLettersIsTheSame()
    {
        $response = $this->ohce->echoe('oa');
        $this->assertEquals($response,'ao');
    }
    /**
     * @test
     */
    public function ohceOfPalindromeReturnsBonitaPalabra()
    {
        $response = $this->ohce->echoe('oto');
        $this->assertEquals($response,'¡Bonita palabra!, oto');
    }
    /**
     * @test
     */
    public function ohceOfStopReturnsAdios()
    {
        $response = $this->ohce->echoe('Stop!');
        $this->assertEquals($response,'Adios');
    }
    /**
     * @test
     */
    public function ohceInTheMorningReturnsBuenosDias()
    {
        $comparator = Mockery::mock(DateComparator::class);
        $comparator->shouldReceive('morning')
            ->andReturn(true);
        $this->ohce->setComparator($comparator);
        $response = $this->ohce->echoe('ohce Pedro');
        $this->assertEquals($response,'Buenos días Pedro');
    }


}