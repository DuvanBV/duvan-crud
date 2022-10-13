<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

    /* $row=mysqli_fetch_array($query); */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DUVAN BOLAÑO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!-- Boostrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Data Table -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/853c6b208c.js" crossorigin="anonymous"></script>

        
    </head>
    <body style="background-image: url(img/fondo5.jpg); background-size:cover;">
        <nav class="navbar navbar-light bg-primary text-white">
            <a class="navbar-brand" href="#">
                <img src="img/logoadmin.png" width="60" height="40" class="d-inline-block align-top" alt="">
                <span class="text-white">DUVAN BOLAÑO</span>
            </a>
        </nav>        
    <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-primary text-white"><h1>Añadir usuario</h1></div>
                                <div class="card-body bg-light">
                                    <form action="insertar.php" method="POST"> 
                                        <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
                                        <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                        <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                        <input type="submit" class="btn btn-outline-primary btn-block">
                                    </form>
                                </div>
                            </div>
                            
                              
                        </div>

                        <div class="col-md-8">    
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h1 class="titulo">Usuarios</h1>
                                </div>
                                <div class="card-body bg-light">
                                    <div class="container ">
                                        
                                        <table id="table_id" class="display ">
                                            <thead class="table-primary table-striped bg-primary  text-white" >
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Dni</th>
                                                    <th>Nombres</th>
                                                    <th>pellidos</th>
                                                    <th>Acciones</th>
                                                    
                                                </tr>
                                            </thead>

                                            <tbody class="">
                                                    <?php
                                                        while($row=mysqli_fetch_array($query)){
                                                    ?>
                                                        <tr>
                                                            <td><?php  echo $row['id']?></td>
                                                            <td><?php  echo $row['dni']?></td>
                                                            <td><?php  echo $row['nombres']?></td>
                                                            <td><?php  echo $row['apellidos']?></td>    
                                                            <td>
                                                                 <!-- Boton para abrir modal de editar-->
                                                                <button type="button" class="btn  btn-outline-secondary" data-toggle="modal" data-target="#modaleditar<?php echo $row['id']; ?>">
                                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                                </button>
                                                                 <!-- Boton para abrir modal de eliminar-->
                                                                 <button type="button" class="btn  btn-outline-danger" data-toggle="modal" data-target="#modaleliminar<?php echo $row['id']; ?>">
                                                                    <i class="fa-regular fa-trash-can"></i></a>
                                                                </button>
                                                            </td>                                       
                                                        </tr>
                                                        <?php include('modaleliminar.php')?>
                                                        
                                                        <?php include('modaleditar.php')?>

                                                        
                                                    <?php }?>
                                            </tbody>
                                        </table>
                                        
                                            <script>
                                                $(document).ready(function() {
                                                $('#table_id').DataTable({
                                                "language": {
                                                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                                                }
                                                });
                                                });
                                            </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
            </div>
    </body>
</html>