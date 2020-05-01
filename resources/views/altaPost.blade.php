<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/altapost-style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Postflix Nuevo Post</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light bg-transparent">
        <!-- LOGO -->
        <a title="PointFlix" href="./index.php">
          <img class="logo" src="logo.png" alt="Postflix">
        </a>
      </nav>
      <div class="form-inline"   "col-lg-4 col-xs-12">
        <a title="Boton Home" href="index.php">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Home </button>
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

        <a title="Boton Contacto" href="./contacto">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Contacto </button>
        </a>
      </div>
    </header>
    <section>
      <form id="formulario" class="form-signin rounded-pill">
        <p>Ingresar Imagen de tu post</p>
        <input type="file" id="botoncoment" name="myfile">
        <p>Descripción</p>
        <textarea id="comentario" placeholder="Escribe aqui la descripción de tu post!..." name="message" rows="4" cols="67"  ></textarea>

        <p>Ingresa una puntuacion</p>
        <select class="form-control">
          <option >Seleccione una puntuación</option>
          <option >1</option><option >2</option><option >3</option><option >4</option>
          <option >5</option><option >6</option><option >7</option><option >8</option>
          <option >9</option><option >10</option>


        </select>
        <br>
        <br>
        <br>
        <br>
        <button id="botoncoment" class="btn" type="submit" >Publicar Post</button>
        <br><br>
      </form>
    </section>

  </body>
</html>
