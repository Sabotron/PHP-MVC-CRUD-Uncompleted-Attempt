<?php
require_once("../Controlador/LoginControl.php");
require_once("../Includes/head.php");

// Elimina las sesiones existentes si entran por otro enlace, como medida de seguridad.
session_start();
session_unset();
session_destroy();
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="../Vista/UserVista.php">Registrarse</a>
                    </li>
                </ul>
                <div class="card-header">
                    <h2>Iniciar Sesión</h2>
                </div>
                <div class="card-body">
                    <form action="../Controlador/LoginControl.php" method="POST">
                        <input type="text" placeholder="Nombre" name="name" class="form-control mb-2" required="true">
                        <input type="text" placeholder="Password" name="pswd" class="form-control mb-2" required="true">
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-success" name="Login" value="Login"> </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("../Includes/footer.php"); ?>