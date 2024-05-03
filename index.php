<?php require __DIR__ . '/partials/functions.php'; ?>
<?php
$passwordLength = isset($_GET['length']) ? intval($_GET['length']) : '';
$allowRepetitions = isset($_GET['repetitions']) ? boolval($_GET['repetitions']) : true;

var_dump($allowRepetitions);

$generatedPass = generateRandomPassword($passwordLength, $allowRepetitions);

if(!empty($passwordLength)){
    session_start();
    $_SESSION['password'] = $generatedPass;
    header('Location: ./showPassword.php');
};

//cliccando sul pallino, l'utente seleziona se ammettere o meno ripetizioni nella password
//prendo la risposta dell'utente la salvo in una variabile, 
//se clicca si la variabile è vera e la password verrà generata normalmente
//se si clicca su no la variabile è falsa 
//se la variabile è falsa  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PasswordGenerator</title>
</head>
<body>
    <header class="pt-4" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5 text-center">
                    <h1 class="ms-txt-color" >Strong Password Generator</h1>
                    <h2 class="text-white" >Genera la tua password sicura</h2>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-5 ms-bg p-3">
                <form method="GET" >
                    <div class="row mb-3 justify-content-center">
                        <div class="col-9 d-flex flex-column gap-5">
                            <label for="length" class="form-label">Lunghezza password:</label>
                            <label for="repetitions" class="form-label">Consenti ripetizioni:</label>
                            <label for="selection" class="form-label">Scegli i caratteri da includere nella tua password:</label>
                        </div>
                        <div class="col-3 d-flex flex-column gap-4">
                            <input type="number" class="form-control ms-border" id="length" name="length" >
                            <span><input type="radio" name="repetitions" id="repetitions" value="1" checked> Si</span>
                            <span><input type="radio" name="repetitions" id="repetitions" value="" > No</span>
                            <span><input type="checkbox" name="selection" id="selection" value="letter" > Lettere</span>
                            <span><input type="checkbox" name="selection" id="selection" value="number" > Numeri</span>
                            <span><input type="checkbox" name="selection" id="selection" value="symbol" > Simboli</span>

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