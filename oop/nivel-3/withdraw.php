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
  <h1 class="text-center  mt-5">Sacar</h1>

  <?php
    include('classes/Account.php');
    $acc = new Account();
    $dpstValue = $_POST['saque'];
    
    if(isset($dpstValue)){
      $acc->validateWidthdraw($dpstValue);
    }
     
    
  ?>


<form class="row g-3 justify-content-md-center mb-5 mt-5" action="withdraw.php" method="post">
  <div class="col-auto">
  <label  class="form-labe align-middle">Introduce un valor para el saque</label>

  </div>
  <div class="col-auto ">
    <input type="text" name="saque" class="form-control" >
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Sacar</button>
  </div>
  <div class="col-auto">
  <a type="button" class="btn btn-primary" href="/">Volver</a>
  </div>
</form>
 