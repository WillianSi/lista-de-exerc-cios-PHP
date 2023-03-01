<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="background-color: #99CCFF;">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="img.svg" class="img-fluid" alt="Phone image">
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form action="saida.php" method="POST">
              <!-- Nome input -->
              <div class="form-outline mb-4">
                <input type="text" id="form1Example13" class="form-control form-control-lg" />
                <label class="form-label" for="form1Example13">Nome</label>
              </div>
              <!-- Senha input -->
              <div class="form-outline mb-4">
                <input type="password" id="form1Example23" class="form-control form-control-lg" />
                <label class="form-label" for="form1Example23">Senha</label>
              </div>
              <div class="d-flex justify-content-around align-items-center mb-4">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                  <label class="form-check-label" for="form1Example3"> Lembre-me </label>
                </div>
                <a href="#!">Esqueceu sua senha?</a>
              </div>
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
              <button type="submit" href="reset" class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" >Limpar</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>