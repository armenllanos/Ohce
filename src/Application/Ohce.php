<?php
namespace Ohce\Application;
class Ohce
{

    public function echoe(string $miPalabra): string
    {
        if(strcmp('Stop!',$miPalabra)==0){
            return 'Adios';
        }
        if(strcmp(strrev($miPalabra),$miPalabra) == 0 and strlen($miPalabra) > 1){
            return "¡Bonita palabra!, $miPalabra" ;
        }
        return strrev($miPalabra);
    }
}