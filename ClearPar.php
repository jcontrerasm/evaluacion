<?php

/* ------------- Start Class -------------*/

    class ClearPar{
        
        function build($cadena){

            $nueva_cadena = '';

            for ($i = 0 ; $i < strlen($cadena) ; $i++) {

                $elemento1 = substr($cadena , $i , 1 );

                $elemento2 = substr($cadena , $i+1 , 1);

                if($elemento1 == '(' && $elemento2 == ')'){
                    $nueva_cadena .= $elemento1 . $elemento2;
                }

            }

            echo $nueva_cadena;

        }

    }

/* ------------- End Class -------------*/

$obj = new ClearPar();
$obj->build(')()())(()()');