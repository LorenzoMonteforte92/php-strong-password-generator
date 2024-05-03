<?php
$passwordLength = isset($_GET['length']) ? intval($_GET['length']) : '';

$generatedPass = generateRandomPassword($passwordLength);

var_dump($generatedPass);

function generateRandomPassword($length){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!"$%&/()=?^-.,;:><';
    $password;
    $numOfCharacters = strlen($characters);
    for($i = 0; $i < $length; $i++){
        $rndmCharacter = rand(0, $numOfCharacters);
        $password[] = $characters[$rndmCharacter];
        
    }
    return implode($password);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PasswordGenerator</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5 text-center">
                    <h1>Strong Password Generator</h1>
                    <h2>Genera la tua password sicura</h2>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-5">
                <form method="GET" >
                    <div class="row mb-3 justify-content-center">
                        <div class="col-9">
                            <label for="length" class="form-label">Lunghezza password</label>
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control" id="length" name="length" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>