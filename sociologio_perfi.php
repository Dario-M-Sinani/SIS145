<?php
include('conexion.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia faculdad</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        .contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin: 0 auto;
        }
        .imagenes {
    display: flex; /* Activar Flexbox */
    flex-wrap: wrap; /* Permitir que las imágenes se distribuyan en varias filas */
    justify-content: space-between; /* Distribuir las imágenes con espacio entre ellas */
}
body{
  background-color: #D7D9D6;
}

.imagen {
    flex: 1 0 auto; /* Asignar espacio flexible a las imágenes */
    margin-bottom: 20px; /* Añadir margen inferior a las imágenes */
}

.tarjeta {
  display: flex;
  flex-direction: row;
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 4px;
  overflow: hidden;
}
.imagen-tarjeta {
    display: flex;
  width: 250px;
  height: 300px;
  object-fit: cover;
}

.texto-tarjeta {
  padding: 20px;
  width: 65%;
  box-sizing: border-box;
}

.texto-tarjeta h2 {
  font-size: 2rem;
  margin-top: 0;
  margin-bottom: 10px;
  color :#95B3D7;
}

.texto-tarjeta h3 {
  font-size: 1rem;
  margin-top: 0;
  margin-bottom: 10px;
  color :#95B3D7;
}
.texto-tarjeta p {
  font-size: 1.2rem;
  line-height: 1.5;
}
</style>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-#F0F000">
        <div class="container-fluid">
          <div>
            <img src="images/logo.png" alt="logo" height="50px" /><a
              class="navbar-brand"
              href="index.html"
              >FACULTAD DE DERECHO</a
            >
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Historia</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Carreras
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="derecho.php">Derecho </a></li>
                  <li>
                    <a class="dropdown-item" href="#">Comunicacion sociol</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Sociologia</a></li>
                  <li><a class="dropdown-item" href="#">Historia</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    
            </form>
          </div>
        </div>
      </nav>



      <div class="tarjeta">
  <img src="images/sociologia_logo.jpg" alt="Imagen de la tarjeta" class="imagen-tarjeta">
  <div class="texto-tarjeta">
    <h2>Datos Generales</h2>
    <ul> 
        <li><h3>Grado Academico:</h3> Licenciatura</li>
        <li><h3>Diploma Academico:</h3> Licenciado o licenciada en sociologia</li>
        <li><h3>Tiempo de Profesionalización:</h3>     5 años</li>
        <li><h3>Modalidad de Admisión:</h3>                Exámen de Admisión</li>
        <li><h3>Modalidad de Evaluacion:</h3> Anualizada</li>
        <li><h3>Modalidad de Graduación:</h3>  
            <li>Trabajo Dirigido</li>
<li>Proyecto de Grado</li>

<li>Excelencia Académica</li>

<li>Tesis de Grado</li>
<li><h3>Titulo de provicion nacional</h3>Socióloga o Sociólogo</li>
    </ul>
  </div>
</div>


<br>

<br>








<br>
<br>
<br>
<br>
<br>




<br>
<br>
<br><br>
      <div class="container-fluid" style="background-color: black">
    <div class="row py-3">
      <div class="col text-center">
        <img src="images/logo_USFX.png" alt="Logo 1" height="80px" />
      </div>
      <div class="col text-center">
        <img src="images/logo4siglos.png" alt="Logo 2" height="80px" />
      </div>
    </div>
  </div>

</body>
</html>
