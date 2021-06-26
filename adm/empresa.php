<?php require_once("Proteccion.php"); 
      require_once("../conec.php");
        $resultado=mysqli_query($cn,"SELECT * from empresa a inner join rubro b on (a.idRubro=b.idRubro) where idEmpresa = '".$_SESSION['usuario']."'");
        while($fila=mysqli_fetch_array($resultado))
        {
            $idEmpresa= $fila["idEmpresa"];
            $logoEmpresa= $fila["logoEmpresa"];
            $nombreEmpresa = $fila["nombreEmpresa"];
            $contraEmpresa= $fila["contraEmpresa"];
            $webEmpresa= $fila["webEmpresa"];
            $ciudadEmpresa= $fila["ciudadEmpresa"];
            $edoEmpresa= $fila["edoEmpresa"];
            $correoEmpresa= $fila["correoEmpresa"];
            $dirEmpresa= $fila["dirEmpresa"];
            $cpEmpresa= $fila["cpEmpresa"];
            $telEmpresa= $fila["telEmpresa"];
            $hisEmpresa= $fila["hisEmpresa"];
            $serEmpresa= $fila["serEmpresa"];
            $expEmpresa= $fila["expEmpresa"];
        }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/datatables.min.css">
    <title>Empresa</title>
</head>

<body>
    <!-- navabar -->
    <?php include_once("../layout/navbaradm.php"); ?>
    <!-- Contenido -->
    <div class="container te pt-5">
            <div class="row">
                <div class="container col-3">
                    <div class="card color" style="width: 18rem;">
                        <img class="card-img-top" src="../image/empresa/<?php echo$logoEmpresa ?>" alt="Inserte un logo para ver aquí">
                        <br>
                        <div class="container">
                            <h1 class="card-title" align="center"><?php echo$nombreEmpresa ?></h1>
                        </div>
                        <hr>
                        <div class="container" align="center">
                            <a href="empleo.php?idEmpresa=<?php echo$idEmpresa ?>" class="btn bg-success"> &nbsp Publica un empleo &nbsp</a>
                        </div>
                        <hr>
                        <div class='container color navP' align='left'>
                            <a href='verEmpresa.php'>Descripción de la empresa</a>
                        </div>
                        <hr class=linea'>
                        <div class='container color navP' align='left'>
                            <a href="verEmpleos.php?idEmpresa=<?php echo$idEmpresa ?>">Empleos publicados</a>
                        </div>
                        <hr class=linea'>
                        <div class='container color navP' align='left'>
                            <a href='verUsuarios.php'>Ver Perfiles</a>
                        </div>
                        <hr class='linea'>
                        <div class='container color navP' align='left'>
                            <a href='cambiarContra.php'>Cambiar contraseña</a>
                        </div>
                        <hr class='linea'>
                        <div class='container color navP' align='left'>
                            <a href='../layout/destruir.php'>Cerrar Sesión</a>
                        </div>
                        <hr class='linea'>
                        <br><br><br><br><br><br><br>
                        <hr>
                        <div class='btn btn-danger borrar' data-id='"<?php echo$idEmpresa ?>"'>
                            <i class='fas fa-trash'></i> Eliminar Empresa
                        </div><br>
                        <label for='correoEmpresa' align='center'>Puedes anular tu registro aquí</label>
                        <br>
                    </div>
                </div>
               
                <div class='container col-6'>
                    <h1>Perfil de la empresa</h1>
                <hr>
                    <form class='form' id='formularioEmpresa' enctype='multipart/form-data' action='accionesEmpresa.php' method='POST'>
                    <div class='container' align='right'>
                        <input type='submit' value='&nbsp &nbsp &nbsp Actualizar &nbsp &nbsp &nbsp' class='btn btn-primary'>
                    </div>
                    <input type='hidden' name='accion' value='editar'>
                    <input type='hidden' name='idEmpresa' value="<?php echo$idEmpresa ?>"  class='form-control'>
                    <input type='hidden' name='contraEmpresa' value="<?php echo$contraEmpresa ?>"  class='form-control'>
                    <div class='row'>
                        <div class='container'>
                            <label for='nombreEmpresa'>Nombre de la empresa: </label>
                            <input type='text' placeholder='Ingresa el nombre de tu empresa' name='nombreEmpresa' value="<?php echo$nombreEmpresa ?>"  class='form-control t'>
                        </div>
                        <!-- Izquierda -->
                        <div class='container col-6'>
                            <label for='webEmpresa'>Página Web: </label>
                            <input type='text' placeholder='Url de tu sitio web' value="<?php echo$webEmpresa ?>" name='webEmpresa' class='form-control t'>

                            <label for='ciudadEmpresa'>Ciudad: </label>
                            <input type='text' placeholder='Ej. Celaya' value="<?php echo$ciudadEmpresa ?>" name='ciudadEmpresa' class='form-control t'>

                            <label for='edoEmpresa'>Estado: </label>
                            <input type='text' placeholder='Ej. Guanajuato' value="<?php echo$edoEmpresa ?>" name='edoEmpresa' class='form-control t'>

                            <label for='correoEmpresa'>Correo: </label>
                            <input type='text' placeholder='Ejemplo@dominio.com' value="<?php echo$correoEmpresa ?>" name='correoEmpresa'  class='form-control t'>
                        </div>
                        <!-- Derecha -->
                        <div class='container col-6'>
                                    
                        <label for='idRubro'>Rubro de la empresa</label>
                        <select class='form-control t' name='idRubro' id='idRubro'>";
                        <?php
                                require_once("../conec.php");
                            $res=mysqli_query($cn,"select * from rubro");
                            while($fil=mysqli_fetch_array($res))
                            { 
                                echo "<option selected='".$fila['idRubro']."' value='".$fil['idRubro']."'>".$fil['nombreRubro']."</option>";
                            }
                            ?>
                        </select>
                            <label for='dirEmpresa'>Dirección: </label>
                            <input type='text' style='color:blue' placeholder='Ej. Av. Sauz #501' value="<?php echo$dirEmpresa ?>" name='dirEmpresa' class='form-control t'>

                            <label for='cpEmpresa'>Código Postal: </label>
                            <input type='text' placeholder='Ej. 38016'  value="<?php echo$cpEmpresa ?>" name='cpEmpresa' class='form-control t'>
                            
                            <label for='telEmpresa'>Teléfono: </label>
                            <input type='text' placeholder='4612518805' value="<?php echo$telEmpresa ?>" name='telEmpresa' class='form-control t'>
                        </div>
                    </div>
                        <hr class='linea'>
                        <div class='container'>
                            <label for='hisEmpresa'>Historia: </label>
                            <textarea type='text' name='hisEmpresa' class='form-control t'><?php echo$hisEmpresa ?></textarea>
                        </div>

                        <div class='container'>
                            <label for='serEmpresa'>Servicios: </label>
                            <textarea type='text' name='serEmpresa' class='form-control t'><?php echo$serEmpresa ?></textarea>
                        </div>

                        <div class='container'>
                            <label for='expEmpresa'>Experiencia: </label>
                            <textarea type='text' name='expEmpresa' class='form-control t'><?php echo$expEmpresa ?></textarea>
                        </div> <br>
                    </form>

                    <hr class='linea'>
                    <form class='form' id='formularioEmpresa' enctype='multipart/form-data' action='accionesEmpresa.php' method='POST'>
                        <label for='logoEmpresa'>Agrega tu logo aquí: </label>
                        <input type='hidden' name='accion' value='editarF'>
                        <input type='hidden' name='idEmpresa' value="<?php echo$idEmpresa ?>"  class='form-control'>
                        <div class='container' align='left'>
                            <input type='file' name='logoEmpresa' class='form-control-file'>
                        </div><br>
                        <div class='container'>
                            <input type='submit' value='&nbsp Actualizar logo &nbsp' class='btn btn-success'>
                        </div>
                    </form>
                    <hr class='linea'>
                </div> 
            </div>
     
    <br><br>
    </div>
    <!-- Footer -->
    <?php include_once("../layout/footer.php"); ?>

    <script src="../js/jquery-3.1.1.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/datatables.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script>

        //Con este código ese pueden observar los DataTables

        $("#tablaReceta").dataTable({
            language: {
                processing:     "Procesando",
                search:         "Buscar",
                lengthMenu:    "Mostrar _MENU_ Elementos",
                info:           "página _START_ de _END_ en _TOTAL_ elementos",
                infoEmpty:      "Sin información",
                infoFiltered:   "filtrado de _MAX_ elementos en total",
                paginate: {
                    first:      "primera",
                    previous:   "anterior",
                    next:       "siguiente",
                    last:       "última"
                },
                aria: {
                    sortAscending:  ": Acendente",
                    sortDescending: ": Descendente"
                }
            }
        });

        //Elimnar una receta
        $(".borrar").on("click",function(){
            var empresa={
                idEmpresa:$(this).data("id"),
                accion:"borrar",
            };
            $.ajax({
                method: "POST",
                url: "accionesEmpresa.php",
                data: empresa,
                success: function(){
                    window.location.replace("../index.php");
                }
            });
        });

        // $("#editar").on("click",function(){
        //     var parametros=$("#formularioEmpresa").serialize();
        //     console.log(parametros);
        //     $.ajax({
        //         method: "POST",
        //         url: "accionesEmpresa.php",
        //         data: parametros,
        //         success: function(){
        //             window.location.replace("empresa.php");
        //         }
        //     });
        // });
       
    </script>
    
</body>

</html>