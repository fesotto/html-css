<?php
  require_once 'routes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="mt-5 m-b4">
    <h1 class="text-center">Bank Ops</h1>
    </div>

    <div class="mt-5 m-b4">
    <h1 class="text-center">Por Favor Elije La Opción</h1>
    </div>
  

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 d-flex justify-content-end mt-5">
        <a type="button" class="btn btn-primary" href="<?php echo url_for('/deposit.php'); ?>">Depositar</a>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-start mt-5">
      <a type="button" class="btn btn-primary" href="<?php echo url_for('/withdraw.php'); ?>">Sacar</a>
        </div>
    </div>
  </div>

  </div>
  
</body>
</html>