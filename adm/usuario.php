<?php require_once("Proteccion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/datatables.min.css">
    <title>Usuario</title>
</head>

<body>
    <?php include_once("../layout/navbaradm.php");?>
    <div class="container te pt-5">
    <?php  require_once("../conec.php");
        $resultado=mysqli_query($cn,"SELECT * from usuario where idUsuario = '".$_SESSION['usuario']."'");
        while($fila=mysqli_fetch_array($resultado))
        {
            echo"
            <div class='row'>
                <div class='container col-3'>
                    <div class='card color' style='width: 18rem;'>
                        <img class='card-img-top' src='../image/usuario/".$fila['fotoUsuario']."' alt='Inserte una foto de perfil'>
                        <br>
                        <div class='container'>
                            <h1 class='card-title' align='center'>".$fila['nombresUsuario']." ".$fila['patUsuario']."</h1>
                        </div>
                        <hr>
                        <div class='container' align='center'>
                            <a href='verCV.php' class='btn bg-primary'> &nbsp Ver  mi cv &nbsp </a>
                        </div>
                        <hr>
                        <div class='container color navP' align='left'>
                            <a href='verUsuario.php'>Ver mi descripción </a>
                        </div>
                        <hr class=linea'>
                        <div class='container color navP' align='left'>
                            <a href='#'>Ver mis postulaciones</a>
                        </div>
                        <hr class='linea'>
                        <div class='container color navP' align='left'>
                            <a href='cambiarContraUsr.php'>Cambiar contraseña</a>
                        </div>
                        <hr class='linea'>
                        <div class='container color navP' align='left'>
                            <a href='../layout/destruir.php'>Cerrar Sesión</a>
                        </div>
                        <hr class='linea'>
                        <br><br><br><br><br><br><br>
                        <hr>
                        <div class='btn btn-danger borrar' data-id='".$fila['idUsuario']."'>
                            <i class='fas fa-trash'></i> Eliminar Usuario
                        </div><br>
                        <label for='eliminarUsuario' align='center'>Puedes anular tu registro aquí</label>
                        <br>
                    </div>
                </div>
               
                <div class='container col-6'>
                    <h1>Perfil de usuario</h1>
                <hr>
                    <form class='form' id='formularioUsuario' enctype='multipart/form-data' action='accionesUsuario.php' method='POST'>
                    <div class='container' align='right'>
                        <input type='submit' value='&nbsp &nbsp &nbsp Actualizar &nbsp &nbsp &nbsp' class='btn btn-primary'>
                    </div>
                    <input type='hidden' name='accion' value='editar'>
                    <input type='hidden' name='idUsuario' value='".$fila['idUsuario']."'  class='form-control'>
                    <input type='hidden' name='contraUsuario' value='".$fila['contraUsuario']."'  class='form-control'>
                    <div class='row'>
                        <div class='container'>
                            <label for='nombresUsuario'>Nombre: </label>
                            <input type='text' placeholder='Ingresa tu(s) nombre(s)' name='nombresUsuario' value='".$fila['nombresUsuario']."'  class='form-control t'>
                        </div>
                        <!-- Izquierda -->
                        <div class='container col-6'>
                            <label for='patUsuario'>Apellido paterno: </label>
                            <input type='text' placeholder='Ingresa tu apellido paterno' value='".$fila['patUsuario']."' name='patUsuario' class='form-control t'>

                            <label for='correoUsuario'>Correo: </label>
                            <input type='text' placeholder='Ejemplo@dominio.com' value='".$fila['correoUsuario']."' name='correoUsuario' value='".$fila['correoUsuario']."' class='form-control t'>
                        </div>
                        <!-- Derecha -->
                        <div class='container col-6'>
                            <label for='matUsuario'>Apellido materno: </label>
                            <input type='text' placeholder='Ingresa tu apellido materno' value='".$fila['matUsuario']."' name='matUsuario' class='form-control t'>
                            
                            <label for='telUsuario'>Teléfono: </label>
                            <input type='text' placeholder='Ej. 4612518805' value='".$fila['telUsuario']."' name='telUsuario' class='form-control t'>
                        </div>
                    </div>
                        <hr class='linea'>
                        <div class='container'>
                            <label for='descUsuario'>Acerca de mí: </label>
                            <textarea type='text' name='descUsuario' class='form-control t'>".$fila['descUsuario']."</textarea>
                        </div> <br>
                    </form>
                    <hr class='linea'>

                    <form class='form' id='formularioUsuario' enctype='multipart/form-data' action='accionesUsuario.php' method='POST'>
                    <label for='fotoUsuario'>Agrega tu foto de perfil aquí: </label>
                    <input type='hidden' name='accion' value='editarF'>
                            <input type='hidden' name='idUsuario' value='".$fila['idUsuario']."'  class='form-control'>
                        <div class='container' align='left'>
                            <input type='file' name='fotoUsuario' class='form-control-file'>
                        </div><br>
                        <div class='container'>
                            <input type='submit' value='&nbsp Actualizar foto &nbsp' class='btn btn-success'>
                        </div>
                    </form>
                    <hr class='linea'>
                    <form class='form' id='formularioUsuario' enctype='multipart/form-data' action='accionesUsuario.php' method='POST'>
                    <label for='cvUsuario'>Adjunta tu curriculum vitae: </label>
                    <input type='hidden' name='accion' value='editarC'>
                            <input type='hidden' name='idUsuario' value='".$fila['idUsuario']."'  class='form-control'>
                        <div class='container' align='left'>
                            <input type='file' name='cvUsuario' class='form-control-file'>
                        </div><br>
                        <div class='container'>
                            <input type='submit' value='&nbsp &nbsp Actualizar CV &nbsp' class='btn btn-success'>
                        </div>
                    </form>
                    <hr class='linea'>
                </div> 
            </div>
            ";
        }
    ?>
    <br><br>
    </div>

    <?php include_once("../layout/footer.php"); ?>

    <script src="../js/jquery-3.1.1.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/datatables.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script>
    $(".borrar").on("click",function(){
            var usuario={
                idUsuario:$(this).data("id"),
                accion:"borrar",
            };
            $.ajax({
                method: "POST",
                url: "accionesUsuario.php",
                data: usuario,
                success: function(){
                    window.location.replace("../index.php");
                }
            });
        });
    </script>
    
</body>

</html>