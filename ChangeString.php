<?php

/* ------------- Start Class -------------*/

    class ChangeString{
        
        function build($cadena){

            $abecedario = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r','s', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
            
            $nueva_cadena = '';

            for($i = 0 ; $i < strlen($cadena) ; $i++){

                $letra = substr($cadena , $i , 1 );

                for ($x = 0; $x < count($abecedario); $x++) {

                    $mayuscula = strtoupper($abecedario[$x]);
                    
                    if($letra == $abecedario[$x]){
                        if($letra != 'z'){
                            $nueva_cadena .= $abecedario[$x+1];
                            break;
                        }else {
                            $nueva_cadena .= $abecedario[0];
                            break;
                        }
                    }

                    if($letra == $mayuscula){
                        if($letra != 'Z'){
                            $nueva_cadena .= strtoupper($abecedario[$x+1]);
                            break;
                        }else {
                            $nueva_cadena .= strtoupper($abecedario[0]);
                            break;
                        }
                    }

                }

            }

            echo $nueva_cadena;

        }

    }

/* ------------- End Class -------------*/

$obj = new ChangeString();
$obj->build('azBZ');