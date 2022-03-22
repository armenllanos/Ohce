<?php
namespace Ohce\Application;
use Illuminate\Support\Facades\Date;
use Nette\Utils\DateTime;

class Ohce
{

    private DateComparator $comparator;

    /**
     * @param DateComparator $comparator
     */
    public function setComparator(DateComparator $comparator): void
    {
        $this->comparator = $comparator;
    }

    public function echoe(string $miPalabra): string
    {
        if(strcmp('Stop!',$miPalabra)==0){
            return 'Adios';
        }
        if(strcmp(strrev($miPalabra),$miPalabra) == 0 and strlen($miPalabra) > 1){
            return "¡Bonita palabra!, $miPalabra" ;
        }
        if(str_contains($miPalabra,'ohce')){
            $nombre = substr($miPalabra,5);
          if ($this->comparator->morning()){
              return 'Buenos días '. $nombre;
          }elseif ($this->comparator->evening()){
              return 'Buenas tardes '. $nombre;
          }
          return 'Buenas noches '. $nombre;
        }
        return strrev($miPalabra);
    }


}