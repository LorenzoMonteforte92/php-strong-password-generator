<?php 

    function generateRandomPassword($length){
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!"$%&/()=?^-.,;:><';
        $password = [];
        $numOfCharacters = strlen($characters);
        for($i = 0; $i < $length; $i++){
            $rndmCharacter = rand(0, $numOfCharacters);
            $password[] = $characters[$rndmCharacter];
            
        }
        return implode($password);
    }


?>