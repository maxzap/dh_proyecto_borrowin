<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro | Borrowin!</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <div class="container">
    <h1>Borrowin!</h1>
    <!--Cabecera-->
    <header class="main-header">
      <a href="#" class="toggle-nav">
        <span class="ion-navicon-round"></span>
      </a>
      <!--Barra de navegación-->
      <nav class="main-nav">
          <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="index.php?login=true">Login</a></li>
              <li><a href="#portfolio">Beneficios de la RS</a></li>
              <li><a href="about.php">Preguntas Frecuentes</a></li>
              <li><a href="contacto.php">Contactate con nosotros</a></li>
          </ul>
      </nav>
    </header>

    <h2>Modal Signup Form</h2>

    <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button> -->

    <div class="modal">
      <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> -->
      <form class="modal-content animate" action="/action_page.php">
        <div class="container">
          <label><b>Email</b></label>
          <input id="input-email" type="text" placeholder="Enter Email" name="email" required>

          <label><b>Password</b></label>
          <input class="input-password" type="password" placeholder="Enter Password" name="psw" required>

          <label><b>Repeat Password</b></label>
          <input class="input-password" type="password" placeholder="Repeat Password" name="psw-repeat" required>
          <input type="checkbox" checked="checked"> Remember me
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>

    </div>
<script>
// Get the modal
// var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
