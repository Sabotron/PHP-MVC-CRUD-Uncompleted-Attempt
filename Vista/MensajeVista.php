<?php

require_once("../Controlador/MensajeControl.php");
require_once("../Includes/head.php");
userSession();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card mt-5">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <p class="nav-link active">Bienvenid@ <?php echo $_SESSION['user']['name']?> </p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../Vista/PublicVista.php">Pagina Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../Vista/LoginVista.php">Logout</a>
                    </li>
                </ul>
                <div class="card-header">
                    <h2 class="card-title">Dashboard</h2>
                    <br>
                    <h4 class="card-subtitle">Agregar Mensaje</h4>
                </div>
                <div class="card-body">
                    <!-- Formulario para agregar mensajes -------------------------------------------------------------------------------->
                    <form action="../Controlador/MensajeControl.php" method="POST">
                        <div class="form-group green-border-focus">
                            <textarea class="form-control" id="mensaje" rows="3" name="mssg"></textarea>
                        </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-success" name="addMssg" value="Agregar"> </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="card-title">Mensajes</h2>
                </div>
                <div class="card-body">

                <?php // Recorre las mensajes creados por el usuario y las muestra con botones de editar/eliminar.
                 $mssgs = getUserMensajes()->fetchAll(); // functions.php
            foreach ($mssgs as $mssg) { ?>
            <blockquote class="blockquote">
                <p class="mb-0"> <?php echo $mssg['mssg'];?></p>
                
            </blockquote>

            <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>