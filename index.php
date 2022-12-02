<?php
  require_once  __DIR__ . '/functions.php';

  $data = $_GET;
  $password = "";



  if(!empty($data)){
    $password = generatePassword($data['lengthPsw']);
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

<div class="container">

  <div class="row">
    <div class="col">
      <form action="./index.php" method="GET" class="d-flex">
        <div class="mb-3  p-2">
          <label for="stars">
            Numero caratteri: 
          </label>
          <input name="lengthPsw" type="number" min="8" max="32">
        </div>

        <div class="mb-3 d-flex p-2">
          <button class="btn btn-primary me-5" type="submit">Genera</button>
        </div>

      </form>
    </div>
  </div>
  <?php if($password != ""): ?> 
  <div class="row">
    <div class="col">
      <h1><?php echo $password; ?></h1>
    </div>
  </div>
  <?php endif;  ?>
</div>

</body>
</html>