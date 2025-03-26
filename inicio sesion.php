</html><!DOCTYPE html>


<html>
    <head>
        <title>my primera pagina <</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .titulos {
                text-align: center;
            }
            .co{
                color: #dad0d8 ;
            }
    
            .coloress{
                color:  #ad1457
    
            }
            .texto-grande{
                font: size 100px;
            }
            .tiposs{
                font-family:Serif
            }

           
         
    
        </style>

    </head>
    <body data-offset="40" background="images/lol (1).jpg" style="background-attachment:fixed">
        
    <div id="principal">
            <header>
                <div id="">
                    <h1 class="titulos tipo coloress tiposs tex">Optics</h1>
                    
                    <h5>
                        <p class="tiposs co">
            
                        </p>
                    </h5>
                    
                </div>
            </header>
            <?php
session_start();
include("datos1.php");

if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pw']) && !empty($_POST['pw'])) {

    $con = mysqli_connect($host, $user, $pw, $bd);
    if (!$con) {
        die("Error al conectar con el servidor: " . mysqli_connect_error());
    }

    $stmt = $con->prepare("SELECT user, pw FROM registros WHERE user = ?");
    $stmt->bind_param("s", $_POST['user']);
    $stmt->execute();
    $result = $stmt->get_result();
    $sesion = $result->fetch_assoc();

    if ($sesion && $_POST['pw'] === $sesion['pw']) { 
        $_SESSION['user'] = $_POST['user'];
        echo '<span style="color: white;">Inicio de sesion exitosa</span>';
    } else {
        echo '<span style="color: white;">Combinación errónea</span>';
    }

    $stmt->close();
    mysqli_close($con);
} else {
    echo '<span style="color: white;">Debes llenar todos los campos</span>';
}


?>
        <div class="container">
            <br><br>
            <header class="header">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="border-top:18px solid #222; border: bottom 1px solid #222; border-radius:4px;">
                            <div class="carousel-item active">
                                <img src="images/ima1.jpg" class="d-block w-100" alt="Regulated Cash" ">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Estilos</h4>
                                    <p>Retro clásico, Minimalista moderno, Inspiración vintage, Deportivo chic.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/ima2.jpg" class="d-block w-100" alt="Objetivos">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Experiencia</h4>
                                    <p>Con nuestros modelos, vivirás una experiencia inolvidable que dejará una marca en tu corazón. Diseñamos cada detalle pensando en ti, porque sabemos que la verdadera calidad no se olvida. ¡Atrévete a descubrir lo extraordinario con nosotros.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/ima3.jpg" class="d-block w-100" alt="Finalidad" ">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Comodidad</h4>
                                    <p>Con nuestros modelos, disfrutarás de la máxima comodidad y satisfacción. Diseñados pensando en ti, combinamos estilo, funcionalidad y calidad.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                      
                    </div>
                </div>
            </header>
            






        

            
        
                <br><br><br><br><br><br>
                    <div id="datos">
                        
                      <br><br><br><br><br><br>
                      <form action="pagina.html" method="POST" name="form">
                            <input type="submit" name="enviar" class="enviar" value="Regresar inicio">
                        </form>
                        Teléfono Fijo: <strong>NO DISPONIBLE</strong><br>
                        Teléfono Celular: <strong>9999999999</strong><br>
                        E-Mail: <strong>TecnicoProgramacionDeSoftware@misena.edu.co</strong><br>
                        Dirección: <strong>SENA Cl. 18 Sur #3225, Bogotá, Colombia</strong><br>
                    </div>
        

            <div id="info">
                <hr>
                <footer>
                    <p>
                        (c) Todos los derechos reservados - Cobe Brayan Cuero Ballesteros<br>
                        <a href="mailto:TecnicoProgramacionDeSoftware@misena.edu.co">Cobib</a>
                    </p>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>









