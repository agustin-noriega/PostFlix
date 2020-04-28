<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/contact-style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contacto PostFlix</title>
  </head>
  <body>
    <div class="container">
      <header>

        <nav class="navbar navbar-light bg-transparent">
          <!-- IMAGEN DEL LOGO -->
          <a title="Logo PostFlix" href="./index.php">
            <img class="logo" src="logo.png" alt="Postflix">
          </a>

          <!-- BARRA DE NAVEGACION -->
          <form class="form-inline   col-lg-4 col-xs-12" method="post">
            <a title="Boton Home" href="index.php">
              <button class="boton btn btn-outline-success" style="margin:10px" id="boton" type="button"> Home </button>
            </a>

            <a title="Boton Login" href="./login">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Login </button>
            </a>
            <a title="Boton Registro" href="./register">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Registro </button>
            </a>
            <a title="Boton Mis Posts" href="./vistapost">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> MisPosts </button>
            </a>
            <a title="Boton Ayuda" href="./faqs">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> FAQS </button>
            </a>
            <!-- <a title="Boton Contacto" href="./contacto.php">
              <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Contacto </button>
            </a> -->
          </form>
        </nav>
      </header>
      <!-- COMIENZO DE CONTACTO POINTFLIX -->


      <section class="contacto col-lg-12 col-md-12 col-xs-12">
        <div class="h1titulo rounded-pill">
          <br>
          <h1>Contacte con nosotros!</h1>
          <br>
        </div>
        <br>

        <form class="form-signin rounded-pill">
          <p>Nombre*</p>
          <input type="text" id="inputNombre" class="form-control" placeholder="Ingrese su Nombre" required autofocus="">

          <p>Apellido*</p>
          <input type="text" id="inputNombre" class="form-control" placeholder="Ingrese su Apellido" required>

          <p>E-mail*</p>
          <input type="email" id="inputEmail" class="form-control" placeholder="Correo electronico" required autofocus="">

          <p>Dejanos tu comentario</p>
          <textarea placeholder="Escribe aqui tu comentario para contactar contigo..." name="message" rows="8" cols="67"  ></textarea>
          <br>
          <button id="botoncoment" class="btn" type="submit" >Enviar Comentario</button>
          <br><br>
        </form>

      </section>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
