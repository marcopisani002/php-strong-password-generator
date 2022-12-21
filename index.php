<?php

$lenght = (int) $_GET["lenght"];
$hasFilters = isset($lenght);
// var_dump($hasFilters);
// var_dump($lenght);


 $lowercaseLetters="abcdefghijklmnopqrstuvwxyz";
 $uppercaseLetters="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 $numbers="1234567890";
 $symbols= "!#$%&'()*+,-.:;<=>?@[\]^_{|}";
 $comb = $lowercaseLetters . $uppercaseLetters .$numbers.$symbols ;
 $pass = array(); 
 $combLen = strlen($comb) - 1; 
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PASSWORD GENERATOR</title>

    <!-- Third party libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-3 text-white">PHP PASSWORD GENERATOR</h1>
        <form action="" method="GET">
            <div class="row justify-content-center ">
                <div class="col-6">
                    <div class="mb-3 text-center">
                        <label class="form-label text-white ">
                            Enter the length of the password to generate : </label>
                        <input type="number" class="form-control bg-info text-white border-0" name="lenght">

                    </div>

                </div>
            </div>
            <div class="text-center">

                <a class="btn btn-danger" href="index.php">Delete</a>
                <button class="btn btn-success" type="submit">START</button>
            </div>
        </form>
        <div class=" container  bg-white text-black my-cnt mt-4 ">
            <?php
            for ($i = 0; $i < $lenght; $i++) {
                $n = rand(0, $combLen);
                $pass[] = $comb[$n];
            }
            ?>
            <strong class="pe-3">PASSWORD:</strong>
          <em>
          <?php
            print(implode($pass)); 
            ?>
            </em>
        </div>
</body>

</html>