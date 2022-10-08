<?php
session_start();
include 'funciones/BaseDatos.php';
?>
<?php
    if (!$_SESSION) {
    header("Location: index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administrador</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/styletab.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">    

    
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a>
                        <span class="icon"><ion-icon name="pizza"></ion-icon></span>
                        <span class="title">Cerini's Pizzería</span>
                    </a>
                </li>
                <li>
                    <a onclick="mostrarInicio()">
                        <span class="icon"><ion-icon name="home"></ion-icon></span>
                        <span class="title">Inicio</span>
                    </a>
                </li>
                <li>
                    <a onclick="mostrarTrabajo()">
                        <span class="icon"><ion-icon name="document-text"></ion-icon></span>
                        <span class="title">Hoja de trabajo</span>
                    </a>
                </li>
                <li>
                    <a onclick="mostrarCarpeta()">
                        <span class="icon"><ion-icon name="library"></ion-icon></span>
                        <span class="title">Carpetas</span>
                    </a>
                </li>
                        <!--                 <li>
                    <a onclick="mostrarDocumento()">
                        <span class="icon"><ion-icon name="server"></ion-icon></span>
                        <span class="title">Documentos</span>
                    </a>
                </li>-->

                <li>
                    <a onclick="mostrarAyuda()">
                        <span class="icon"><ion-icon name="help"></ion-icon></span>
                        <span class="title">Ayuda</span>
                    </a>
                </li>
                        <!--                 <li>
                    <a onclick="mostrarConfig()">
                        <span class="icon"><ion-icon name="settings"></ion-icon></span>
                        <span class="title">Configuración</span>
                    </a>
                </li> -->

                <li>
                    <a onclick="mostrarUser()">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <span class="title">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="funciones/cerrar.php">
                        <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                        <span class="title">Cerrar sesión</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- MENU-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                <ion-icon name="menu"></ion-icon>
                </div>
        <!-- BUSCADOR-->
                <div class="search">
                    <label >
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search"></ion-icon>
                    </label>
                </div>
        <!-- IMAGEN-->
                <div class="user">
                    <img src="img/logo.jpeg" alt="">
                </div>
            </div>

        <!-- CONTEIDO-->
        <div id="contenidog" class="contenidog">
        <!-- CONTEIDO E-->
        <h1>administrador</h1>
        <!-- CONTEIDO E-->
            </div>
        <!-- CONTEIDO-->
        </div>
    </div>

<!-- Inicia Modal REGISTRO USUARIOS -->
<form id="RVendedor" name="RVendedor">
<div id="modal-Rusuario" class="modal-con">
    <div class="modal">

    <header>Registro de usuario</header>
        <br>
        <label>RFC</label>
        <input type="text" REQUIRED name="prodcuto" id="prodcuto" value="">
        <br>
        <label>Nombre</label>
        <input type="text" REQUIRED name="descrip" id="descrip" value="">
        <br>
        <label>Apellido paterno</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Apellido materno</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Telefono</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Direccion</label>
        <input type="text" REQUIRED name="precio" id="precio" value="">
        <br>
        <label>Fecha de nacimiento</label>
        <input type="date" REQUIRED name="caducidad" value="" required>
        <br>
        <button class="btnverde">Guardar</button>
        <input onclick="registrarSucursal();" type="button" value="Guardar">
        <span onclick="cerrarRusuario();"  id="cerrar" class="cerrar">X</span>
    </div>
</div>
</form>
<!-- Finaliza Modal REGISTRO USUARIOS -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="js/am.js"></script>
    <script src="js/view.js"></script>
    <script src="js/log.js"></script>
    <script src="js/viewm.js"></script>
</body>
</html>