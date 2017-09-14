<!DOCTYPE html>
<html class="login-html">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Login | Borrowin!</title>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Courgette|Anton|Baloo+Tamma|Marvel|Katibeh" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!--Division contenedora-->
    <div class="container">
      <!--ABOUT-->
    <section class="home-login">
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
              <li><a href="registerForm.php">Registrate</a></li>
              <li><a href="#portfolio">Beneficios de la RS</a></li>
              <li><a href="about.php">Preguntas Frecuentes</a></li>
          </ul>
      </nav>
    </header>
    </section>
    <div class="cont">
      <!--Login-->
      <div id="login-button">
        <img id="login-img" src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
      </img>
    </div>
    <div id="container">
      <h1>Log In</h1>
      <span class="close-btn">
        <img id="close-btn-img" src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
      </span>

      <form >
        <input class="login-form-input" type="email" name="email" placeholder="E-mail">
        <input class="login-form-input" type="password" name="pass" placeholder="Contraseña">
        <a id="login-form-button" href="#">Log in</a>
        <div id="remember-container">
          <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
          <span id="remember">Recordar</span>
          <span id="forgotten">Olvide mi Contraseña</span>
        </div>
      </form>
    </div>

    <!-- Forgotten Password Container -->
    <div id="forgotten-container">
      <h1>Forgotten</h1>
      <span class="close-btn">
        <img id="close-btn-img" src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
      </span>

      <form>
        <input class="login-form-input" type="email" name="email" placeholder="E-mail">
        <a href="#" class="orange-btn">Get new password</a>
      </form>
    </div>

    </div>
    </div>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- <script>
        $('.toggle-nav').click(function (){
          $('.main-nav').slideToggle(300);
        });
      </script> -->
        <script src="js/index.js"></script>
        </script>
    </form>
  </body>
</html>
