<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Borrowin!</title>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Courgette|Anton|Baloo+Tamma|Marvel|Katibeh" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!--Division contenedora-->
    <div class="container">
      <!--HOME-->
      <section class="home">
        <h1>Borrowin!</h1>
        <!--Cabecera-->
        <header class="main-header">
          <a href="#" class="toggle-nav">
            <span class="ion-navicon-round"></span>
          </a>
          <!--Barra de navegación-->
          <nav class="main-nav">
              <ul>
                  <li><a href="#services">Registro/Login</a></li>
                  <li><a href="#portfolio">Beneficios de la RS</a></li>
                  <li><a href="#about">Preguntas Frecuentes</a></li>
              </ul>
          </nav>
        </header>
        <div class="front-banner">
          <h3>Bienvenido a Borrowin!</h3>
          <h2>prestarlo con ganas</h2>
          <a href="index.php?login=true" id="login-button">Registrate</a>
        </div>

      </section>
      <!--Footer-->
      <footer class="main-footer">
        <h3>Copyright Your Website 2014</h3>
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <a href="#">Privacy Policy</a>
        <a href="#">Term of Use</a>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  	<script>
  		$('.toggle-nav').click(function (){
  			$('.main-nav').slideToggle(300);
  		});
  	</script>
  </body>
</html>
