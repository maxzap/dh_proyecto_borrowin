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
      <!--ABOUT-->
      <section class="contact">
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
                  <li><a href="registerForm.php">Registrate</a></li>
                  <li><a href="about.php">Preguntas Frecuentes</a></li>
              </ul>
          </nav>
        </header>
        <div class="body-contact">
          <form  class="contact_form" action="#">
            <div>
              <ul>
                    <li>
                      <h2>Contacto</h2>
                    </li>
                    <li>
                      <label for="name">Nombre:</label>
                      <input type="text" placeholder="Nombre" required autofocus/>
                    </li>
                    <li>
                      <label for="email">Email:</label>
                      <input type="email" name="email" placeholder="tu@email.com" required />
                    </li>
                    <li>
                      <label for="message">Mensaje:</label>
                      <textarea name="message" required></textarea>
                    </li>
                    <li>
                      <button class="submit" type="submit">Enviar mensaje</button>
                    </li>
                </ul>
             </div>
           </form>
        </div>

      </section>
      <!--Footer-->
    <footer class="main-footer">
        <h3>Borrowin - 2017</h3>
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
