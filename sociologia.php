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

        .imagen img {
            width: 100%;
            height: auto;
        }

        .texto-imagen {
            position: absolute;
            bottom: 400px;
            left: 750px;
            background-color: rgba(0, 0, 0, 0);
            color: white;
            padding: 5px;
            font-size: 50px;
        }
        .texto-imagen2 {
            position: absolute;
            bottom: 300px;
            left: 600px;
            background-color: rgba(0, 0, 0, 0);
            color: white;
            padding: 5px;
            font-size: 40px;
            font-family : italic;
        }
        .texto-imagen3 {
            position: absolute;
            bottom: -1500px;
            right: 700px;
            background-color: rgba(0, 0, 0, 0);
            color: white;
            padding: 5px;
            font-size: 40px;
            font-family: times new roman;
            color:#C0504D
            font-weight: 800;
        }
        .texto-imagen4 {
            position: absolute;
            bottom: -1700px;
            right:1000px;
            background-color: rgba(0, 0, 0, 0);
            color: white;
            padding: 5px;
            font-size: 40px;
            font-family : italic;
        }
        .logo {
            width: 20%;
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px;
            height: 100px;
        }

        .logo-imagen img {
          display:flex;
    position: absolute;
    top: 2500px;
    right: 80px;
}

        .nav {
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            justify-content: center;
        }
        .nav ul li:first-child a:hover {
    color: #E7DBCB; 
}

.nav ul li:nth-child(2) a:hover {
    color: #E7DBCB; 
}

.nav ul li:last-child a:hover {
    color: #E7DBCB; 
}

        .nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav li {
            display: inline-block;
            margin: 0 10px;
            text-align: center;
        }

        .nav a {
            color: white;
            text-decoration: none;
        }


        .container2 {
    display: flex; 
    flex-wrap: wrap; 
    justify-content: space-around; 
    margin: 20px;
}

.card {
    width: 300px; 
    margin-bottom: 20px;
    background-color:#D7D9D6;
    border: none; 
    }


.card-content {
    padding: 20px;
}

.card-content h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.card-content p {
    font-size: 14px;
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
                    <a class="dropdown-item" href="#">Comunicacion social</a>
                  </li>
                  <li><a class="dropdown-item" href="sociologia.php">Sociologia</a></li>
                  <li><a class="dropdown-item" href="#">Historia</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    
            </form>
          </div>
        </div>
      </nav>
      <div class="contenedor">
        <div class="imagenes">
          <div class="imagen">
            <img src="images/sociologia.jpg" alt="Imagen 1" >
            <div class="texto-imagen"><h1>CARRERA DE SOCIOLOGIA</h1></div>
            <div class="texto-imagen2">Facultad de Derecho, Ciencias Políticas y Sociales</div>
        <nav class="nav">
            <ul>
                <li><a href="sociologia.php">Inicio</a></li>
                <li><a href="sociologio_perfi.php">Perfil de la carrera</a></li>
                <li><a href="https://si.usfx.bo/planestudio/ctrl/index.php?id=0&pag=123&ex=yes&op=pln&idc=61&idp=1&idf=PS">Plan de estudio</a></li>
            </ul>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <section class="container2">
        <div class="card">
            <div class="card-content">
                <h3>Mision</h3>
                <p>"Nos enfocamos en desarrollar un proceso de formación profesional de alta calidad, respaldado por una administración y gestión educativa eficiente. 
                    Estamos comprometidos con abordar las problemáticas tanto del departamento como del país en nuestro quehacer educativo."</p>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <h3>Vision</h3>
                <p>"Buscamos establecer una carrera de Sociología institucionalizada con prestigio y reconocimiento a nivel local, nacional e internacional. 
                    A través de la integración de procesos de formación de recursos humanos, investigación,
                     producción y difusión de conocimientos, así como la interacción social, nuestra carrera participa 
                     activamente en la transformación y desarrollo sostenible tanto de Chuquisaca como de Bolivia."</p>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <h3>objetivo</h3>
                <p>"Fomentar la capacitación integral de nuestros estudiantes en el análisis sociológico, la investigación social y la aplicación de teorías y metodologías sociológicas en la comprensión 
                    y transformación de los procesos sociales, promoviendo así su inserción activa y efectiva en diversos ámbitos profesionales y contribuyendo al desarrollo sostenible de la sociedad."</p>
            </div>
        </div>
    </section>


        </div>
        
        <div class="logo-imagen"> <img src="images/escudo.png" alt="Logo" height="300px"> </div>
            

            <div class="imagen">
                <img src="images/sociologia3.jpg" alt="Imagen 2">
                <div class="texto-imagen3">ELIGE LA MEJOR DE LAS CARRERAS</div>
                <div class="texto-imagen4">Sociologia</div>
            </div>
        </div>
    </div>

    <section class="container2">
      <div class="card-content">
        <h3>Historia</h3>
        <p>En la Universidad Mayor, Real y Pontificia de San Francisco Xavier de Chuquisaca se utilizó el término de Facultad en vez de Carrera por la virtud, propiedad y potencia de otorgar títulos de acuerdo a las cátedras que se impartían. Todavía en el siglo XVIII sigue llamándose Facultad de Sagrada Teología y Derecho a la que se sumaría en febrero del año 1776 la Real Academia Carolina de práctica jurídica. En el siglo XIX la Facultad jugará un rol importante en la lucha por la independencia y en la formación de las leyes de la nueva nación. En el siglo XX albergará dos Carreras: Derecho y Comunicación Social; y en el siglo XXI se fortalece la Facultad de Derecho, Ciencias Políticas y Sociales que fue la primera en crearse, con la incorporación de las Carreras de Sociología e Historia.

La Dirección del Instituto de Sociología Boliviana (ISBO) y la Dirección de la Carrera de Derecho en la gestión 2005 diseñaron el proyecto de creación de la Carrera de Sociología, el cuál fue presentado mediante resolución 024/2005 al Honorable Consejo Facultativo quién aprobó el mismo en todas sus partes y el 13 de diciembre del 2005 autorizó su creación. El 21 de diciembre del mismo año, surge el dictamen Nro. 25/2005 de la Comisión Académica de la Universidad, en la que se aprueba su creación.

El 7 de abril del 2006 en función a lo dispuesto por el Estatuto Orgánico de la Universidad, amparado en el Artículo 9 incisos b), d), g), y u) se determina la aprobación de su creación al interior de la Facultad y su funcionamiento a partir del mes de mayo del 2006, en el ex edificio Cintatex de la Plazuela del Inisterio que comparte con el ISBO, la hemeroteca y el centro Juana Azurduy.</p>
      </div>

    </section>

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
