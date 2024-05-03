<?php require __DIR__ . '/partials/functions.php'; ?>
<?php
$passwordLength = isset($_GET['length']) ? intval($_GET['length']) : '';

$generatedPass = generateRandomPassword($passwordLength);

if(!empty($passwordLength)){
    session_start();
    $_SESSION['password'] = $generatedPass;
    header('Location: ./showPassword.php');
};

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