<?php
session_start();
$userPassword = $_SESSION['password'];
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
                <div class="col-5 justify-content-center align-items-center ms-bg p-3">
                    <div class="text-center">
                        La password generata per te è: <span class="fw-bold" ><?php echo $userPassword;?></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>