<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Login</title>
  <style type="text/css">
   body {
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(46,80,74,1) 45%, rgba(0,212,255,1) 90%);
    }
    .error {
   background: #d62828;
   color: #181616;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
    }
  </style>
</head>

<body class="bg-success">
  <div class="container ">
    <div class="row justify-content-center ">
      <div class="col-md-4 col-lg-5 mt-5">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title text-center mb-8"style="font-family: cursive;">LOGIN</h1>
            <form action="./Logear.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
                <h4><center>	<p class="error" ><?php echo $_GET['error']; ?></p></center></h4>
     	<?php } ?>
                <h4 class="text-center">(completar los campos requeridos)</h4>
              <div class="mb-4">
                <label for="username" class="form-label" ><i class="bi bi-person-circle"></i>  Usuario</label>
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required placeholder="Usuario"  />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label " > <i class="bi bi-key"></i> Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Contraseña" />
              </div>
              <button type="submit" class="btn btn-success w-100" value="Iniciar sesion" style="font-family: cursive;">
               ENTRAR <i class="bi bi-box-arrow-right"></i>
              </button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

</body>

</html>