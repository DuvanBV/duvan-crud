 <!-- Modal -->
 <div class="modal fade" id="modaleditar<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <div class="card">
            <div class="card-header bg-primary text-white"><h1>Actualizar datos de <?php echo $row['nombres'] ?> </h1></div>
                <div class="card-body bg-light">
                    <div class="container mt-5">
                        <form action="update.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                    <label for="">DNI</label>
                                    <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni']  ?>">
                                    <label for="">Nombres</label>
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                    <label for="">Apellidos</label>
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                    <br>
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                                    <input type="submit" class="btn btn-outline-primary" value="Actualizar" id="<?php echo $row['id']  ?>">
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>