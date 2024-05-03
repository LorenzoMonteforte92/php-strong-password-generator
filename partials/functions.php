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
            //se $allowRepetitions è falsa genera un numero,
            //se il carattere è nell'array sparalo dentro 
            } else{
                $rndmCharacter = rand(0, $numOfCharacters);
                if(!in_array($characters[$rndmCharacter], $password)){
                    $password[] = $characters[$rndmCharacter];
                }
                
            }
            
            
        }
        return implode($password);
    }


?>