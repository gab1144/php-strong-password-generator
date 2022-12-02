<?php
  require_once  __DIR__ . '/functions.php';

  $data = $_GET;
  $password = "";

  if(!empty($data) && $data['lengthPsw'] !="" && isset($data['characters'])){
    $password = generatePassword($data['lengthPsw'], $data['characters'], $data['repetitions']);
    session_start();
    $_SESSION['password'] = $password;
    header('Location: ./generatedPassword.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>

  <title>Password generator</title>
</head>
<body>

<div class="container fluid d-flex align-items-center justify-content-center" style="height: 100vh; width 100%">
  <div class="row bg-light p-5 shadow rounded">
    <div class="col">

      <h1>STRONG PASSWORD GENERATOR</h1>
      <h3>Genera una password sicura tra 8 e 32 caratteri</h3>
      <form action="./index.php" method="GET" class="">

        <div class="form-check p-2  pe-5">
          <input class="form-check-input" type="radio" name="repetitions" id="no-repetitions" value="0" checked>
          <label class="form-check-label" for="no-repetitions">
            Con ripetizioni
          </label>
        </div>
        
        <div class="form-check  p-2">
          <input class="form-check-input" type="radio" name="repetitions" id="with-repetitions" value="1">
          <label class="form-check-label" for="with-repetitions">
            Senza ripetizioni
          </label>
        </div>

        <div class="mb-3  p-2">
          <label for="lengthPsw">
            Numero caratteri: 
          </label>
          <input name="lengthPsw" type="number" min="8" max="32" value="8">
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="letters" id="letters" name="characters[]">
          <label class="form-check-label" for="letters">
            Lettere
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="numbers" id="numbers" name="characters[]">
          <label class="form-check-label" for="numbers">
            Numeri
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="symbols" id="symbols" name="characters[]">
          <label class="form-check-label" for="symbols">
            Simboli
          </label>
        </div>
        <div class="mt-3 d-flex p-2 d-flex justify-content-center">
          <button class="btn btn-primary" type="submit">Genera</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>