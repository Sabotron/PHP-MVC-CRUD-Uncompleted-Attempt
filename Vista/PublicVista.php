<?php
require_once("../Controlador/MensajeControl.php");
require_once("../Includes/head.php");
?>
<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card mt-5">
                <div class="card-header">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" href="../Vista/LoginVista.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../Vista/UserVista.php">Registrarse</a>
                        </li>
                    </ul>
                    <h2 class="card-title">Página Principal</h2>
                </div>
                <div class="card-body">

                    <?php // Recorre las mensajes creados por el usuario y las muestra con botones de editar/eliminar.
                    $mssgs = getMensajes()->fetchAll(); // functions.php
                    foreach ($mssgs as $mssg) { ?>
                        <blockquote class="blockquote">
                            <p class="mb-0"> <?php echo $mssg['mssg']; ?></p>

                        </blockquote>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("../Includes/footer.php");  ?>