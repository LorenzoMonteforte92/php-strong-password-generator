<?php 

    function generateRandomPassword($length, $bool ){
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!"$%&/()=?^-.,;:><';
        $password = [];
        $numOfCharacters = strlen($characters);
        for($i = 0; $i < $length; $i++){
            //se $allowRepetitions è vera fai girare la funzione normalmente
            if($bool){
                $rndmCharacter = rand(0, $numOfCharacters);
                $password[] = $characters[$rndmCharacter];
            }
            
            
        }
        return implode($password);
    }


?>