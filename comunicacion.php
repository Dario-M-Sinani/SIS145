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
            bottom: -980px;
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
            bottom: -1100px;
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
    top: 2200px;
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
    display: flex; /* Arrange cards in a row */
    flex-wrap: wrap; /* Wrap cards to the next line if they don't fit */
    justify-content: space-around; /* Distribute cards evenly with space between them */
    margin: 20px;
}

.card {
    width: 300px; /* Adjust card width as needed */
    margin-bottom: 20px;
    background-color:#D7D9D6;
    border: none; /* Remove borders */
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
                    <a class="dropdown-item" href="comunicacion.php">Comunicacion sociol</a>
                  </li>
                  <li><a class="dropdown-item" href="sociologia.php">Sociologia</a></li>
                  <li><a class="dropdown-item" href="historia.php">Historia</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    
            </form>
          </div>
        </div>
      </nav>
      <div class="contenedor">
        <div class="imagenes">
          <div class="imagen">
            <img src="images/comunicacion.jpg" alt="Imagen 1" >
            <div class="texto-imagen"><h1>CARRERA DE COMUNICACION SOCIAL</h1></div>
            <div class="texto-imagen2">Facultad de Derecho, Ciencias Políticas y Sociales</div>
        <nav class="nav">
            <ul>
                <li><a href="comuni_perfi.php">Perfil de la carrera</a></li>
                <li><a href="https://si.usfx.bo/planestudio/ctrl/index.php?id=0&pag=123&ex=yes&op=pln&idc=23&idp=11&idf=PS">Plan de estudio</a></li><li><a href="comunicacion.php">Inicio</a></li>
                <li><a href="https://www.facebook.com/RadioUniversitariaSucre/">Radio Universitaria</a></li>
            </ul>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section class="container2">
        <div class="card">
            <div class="card-content">
                <h3>Radio Universitaria</h3>
                <p>Los estudiantes de la Carrera de Ciencias de la Comunicación Social de la Universidad San Francisco Xavier de Chuquisaca operan la Radio Universitaria 94.0 FM en Sucre. Esta iniciativa ofrece 
                    a los universitarios la oportunidad de poner en práctica sus habilidades de comunicación mientras contribuyen a la difusión de contenido educativo, cultural y de interés para la comunidad local.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <h3>bienvenida a la carrera de Ciencias de la Comunicacion Social </h3>
                <p>Desde su fundación en 1989, la Carrera de Ciencias de la Comunicación Social de la Universidad San Francisco Xavier de Chuquisaca ha experimentado un crecimiento 
                    notable en todos los aspectos. Con treinta y cuatro años de trayectoria, ha demostrado un desarrollo exponencial tanto en infraestructura como en la implementación de proyectos con impacto social significativo. Enraizada en la Facultad de Derecho, 
                    Ciencias Políticas y Sociales, esta carrera ha consolidado su posición como un pilar importante en la formación de profesionales de la comunicación en la región.</p>
            </div>
        </div>
    </section>


        </div>
        
        <div class="logo-imagen"> <img src="images/escudo.png" alt="Logo" height="300px"> </div>
            

            <div class="imagen">
                <img src="images/comunicacion2.jpg" alt="Imagen 2">
                <div class="texto-imagen3">ELIGE LA MEJOR DE LAS CARRERAS</div>
                <div class="texto-imagen4">Comunicacion Social</div>
            </div>
        </div>
    </div>

    <section class="container2">
      <div class="card-content">
        <h3>Historia</h3>
        <p>La Carrera de Comunicación Social, es dependiente de la Facultad de Derecho, Ciencias Políticas y Sociales de la Universidad Mayor, Real y Pontificia de San Francisco Xavier de Chuquisaca. 
            Es la única unidad académica, en la ciudad de Sucre, capacitada para formar Comunicadores Sociales Profesionales. 
            La Carrera acoge en su seno a estudiantes de la ciudad de Sucre, del departamento de Chuquisaca, de los diferentes puntos del país, e incluso, estudiantes que vienen de algunos países vecinos.</p>
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
