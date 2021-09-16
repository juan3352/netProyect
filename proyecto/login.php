<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi blog</title>
        <link rel="stylesheet" href="estilos/estilos.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body class="principal">
        <?php
        ?>    
        <div>
            <header class="cabeza">
                <div class="container">
                    <h1 style="color: white;">Mi blog personal</h1>

                    <div class="nav-wrapper">
                        <nav style="background-color:rgba(255,0,0,0)">
                            <a href="index.php" class="brand-logo">Juan Domingo Cuc Huchin</a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="index.php" style="color:aqua;">Principal</a></li>
                                <li><a href="general.php" style="color:aqua;">Datos generales</a></li>
                                <li><a href="metas.php" style="color:aqua;">Metas</a></li>
                                <li><a href="login.php" style="color:aqua;">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>


        <hr>
        <div class="row">
            <div class="col s12 m6 offset-m4">
                <form action="index.html" method="get">
                    <div class="row card-panel z-depth-4">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input
                                type="text"
                                placeholder="Ingresa tu cuenta de usuario"
                                id="usuario"
                                name="usuario"
                                class="validate"
                                required
                                />
                            <label for="usuario">Usuario:</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">fingerprint</i>
                            <input
                                type="password"
                                id="pswd"
                                name="pswd"
                                class="validate"
                                required
                                />
                            <label for="pswd">Password:</label>
                        </div>
                        <button class="btn blue right">
                            <i class="material-icons left">login</i>
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>




        <footer class="page-footer" style="background-color: black;">
            <div class="foot1">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s20">
                            <h5 class="white-text">Mi blog personal</h5>
                            <p class="grey-text text-lighten-4">Esta pagina web esta creada solo con fines educativos, la informacion que se muestra podria no ser real, al no ser una pagina con fin economico, todas las imagenes reservan los derechos de autor de cada una.</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">Links de interés</h5>
                            <ul>
                                <li><a class="grey-text text-lighten-3" href="https://www.uacam.mx/" target="_blank">UAC</a></li>
                                <li><a class="grey-text text-lighten-3" href="http://fi.uacam.mx/" target="_blank">Facultad de Ingeniería</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!" target="_blank">ff</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!" target="_blank">Link 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © Juan Domingo Cuc Huchin © 2021 by JDCH

                    </div>
                </div>
            </div>
        </footer> 

    </body>
</html>



