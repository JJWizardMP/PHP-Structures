<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
        <!-- CSS files -->
        <link rel="stylesheet" href="./assets/styles/dashboard.css">
    </head>
    <body>
        <?php
            session_start();
            /*session is started if you don't write this line can't use $_Session  global variable*/
            if(empty($_POST['username'])){
                if(!isset($_SESSION['user'])){
                    header('Location:./nologin.php');
                }
            }else{
                if(!isset($_SESSION['user'])){
                    $_SESSION["user"]=$_POST["username"];
                    $_SESSION["date"]=date("M d, Y");
                }
            }
        ?>
        <div id="Main" class="container-fluid">
            <div id="Page" class="row">
                <div id="sidebar" class="col-sm-2 idenav">
                    <p style="text-align:center;" class="h4 btn-dark"><small>Ejemplos PHP</small></p> <br>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="./pages/ifelse.php" 
                            class="btn btn-outline-danger btn-block" 
                            role="button" aria-pressed="true">IF ELSE</a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/ifelseif.php" 
                            class="btn btn-outline-danger btn-block" 
                            role="button" aria-pressed="true">IF ELSE IF</a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/switch.php" class="btn btn-outline-danger btn-block" 
                            role="button" aria-pressed="true">SWITCH CASE</a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/for.php" class="btn btn-outline-danger btn-block" 
                            role="button" aria-pressed="true">FOR</a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/foreach.php" class="btn btn-outline-danger btn-block" 
                            role="button" aria-pressed="true">FOREACH</a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/while.php" class="btn btn-outline-danger btn-block" 
                            role="button" aria-pressed="true">WHILE</a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/dowhile.php" class="btn btn-outline-danger btn-block" 
                            role="button" aria-pressed="true">DO WHILE</a>
                        </li>
                    </ul>
                    <br>
                    <a href="./logout.php" 
                            class="btn btn-danger btn-block" 
                            role="button" aria-pressed="true">Salir</a>
                </div>
                <div id="DC" class="col-sm-10 Content">
                    <p class="ShadowFont h4"><small>Ejemplos de Estructuras y Operaciones en PHP</small></p>
                    <hr>
                    <p class="ShadowFont h2"> <?php echo  'Bienvenido ' . $_SESSION['user'] ?> </p>
                    <p class="ShadowFont h5"><span class="glyphicon glyphicon-time"></span> 
                        Hoy es <?php echo $_SESSION['date'];?></p>
                    <br>
                    <!-- Dinamic DIV -->
                    <div id="Dinamic-Content">
                       <p class="ShadowFont text-justify">
                           En esta página podrás navegar hacia diferentes ejemplos de 
                           estructuras condicionales(<i>ifelse, ifelseif, switch case</i>) y 
                           repetitivas(<i>for, foreach, while, do-while</i>) en el lenguaje 
                           de programación <i>PHP</i>. Cada ejemplo permite ingresar datos 
                           para realizar operaciones en el lado del servidor y se mostrará 
                           los resultados para cada selección.
                        </p>
                        <p class="ShadowFont text-justify">
                            Esta web fue construida por Joan de Jesús Méndez Pool
                            (<i>160300102</i>) y Uziel Torres Valera (<i>170300150</i>) 
                            como proyecto del segundo parcial para la materia 
                            de <i>ID0265 Programación Web</i>.
                        </p>
                    </div>
                </div>
            </div>
    <!-- Footer -->
        <footer id="Foot" class="bg-dark text-center text-white">
            <div class="container-fluid">
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © <?php echo date("Y"); ?> copyright:
                    <a class="text-white" href="https://www.unicaribe.mx/" target="blank_">
                        Universidad del Caribe</a>
                </div>
                <!-- Copyright -->
            </div>
        </footer>
    <!-- End Footer -->
        </div>
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- partial -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
                crossorigin="anonymous"></script>
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/ae2bc38384.js" crossorigin="anonymous"></script>
        <!--Scripts-->
    </body>
</html>