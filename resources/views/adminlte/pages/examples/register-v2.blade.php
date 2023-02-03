<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="adminlte/index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="register/user" method="post" onsubmit="validaRegister()">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="tect" class="form-control" name="emailuser" id="emailuser" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass1" id="pass1" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Retype password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary"> -->
              <div >
              <input style="zoom: 1.4;" type="checkbox" id="terms" name="terms" id="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="terms">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="login" class="text-center">Já sou membro</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.min.js"></script>
<script>
  function validaRegister(){
    event.preventDefault();
    let usr_name = document.getElementById('fullname').value;
    let usr_email = document.getElementById('emailuser').value;
    let usr_pass1 = document.getElementById('pass1').value;
    let usr_pass2 = document.getElementById('pass2').value;
    let usr_term = document.getElementById('terms');
    if(usr_name.length < 3 || usr_name.length == 1 ){
      alert("o nome precisa ter minimo de 3 letras");
      return false;
      };
    if(usr_email.indexOf('@') == -1){
      alert('este e-mail não possui  "@"');
      return false;
      };
    if (usr_email.indexOf('.') == -1){
      alert('Este email não possui "."');
      return false;
      }
    if(usr_pass2 !== usr_pass1){
      alert('As senhas não são iguais!');
      return false;
      }
    if(usr_term.checked == false){
      alert('precisa aceitar os termos');
      return false;
      }
      event.currentTarget.submit(); 
    }
</script>
</body>
</html>

