<?php

/* ------------- Start Class -------------*/

    class CompleteRange{
        
        function build($numeros){

            $nuevos_numeros = array();

            $tamano = count($numeros);

            for ($i = 0; $i < $tamano ; $i++) {

                if($i == $tamano - 1){

                    for ($x = $numeros[0] ; $x < $numeros[$i] + 1 ; $x++) { 

                        $nuevos_numeros[$x] = $x;
                        echo $nuevos_numeros[$x];

                    }

                }

            }
        }

    }

/* ------------- End Class -------------*/

$obj = new CompleteRange();
$numeros = [ 8 , 12 , 15 , 30];
$obj->build($numeros);