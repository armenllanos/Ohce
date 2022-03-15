<?php
namespace Ohce\Application;
class Ohce
{

    public function echoe(string $miPalabra): string
    {
        if(strcmp(strrev($miPalabra),$miPalabra) == 0 and strlen($miPalabra) > 1){
            return "¡Bonita palabra!, $miPalabra" ;
        }
        return strrev($miPalabra);
    }
}