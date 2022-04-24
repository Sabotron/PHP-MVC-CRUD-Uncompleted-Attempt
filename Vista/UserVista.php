<?php
require_once("../Controlador/AdminControl.php");
require_once("../Includes/head.php");
// Recibe información del usuario para crear una cuenta.
//errorHandler(); // functions.php
?>

<div class="container">
  <div class="row">
    <div class="col-lg-10 m-auto">
      <div class="card mt-5">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" href="../Vista/PublicVista.php">Página Principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Vista/LoginVista.php">Login</a>
          </li>
        </ul>
        <div class="card-header">
          <h2 class="card-title">Registrar Usuario</h2>
          <br>
          <h4 class="card-subtitle">Ingresar Información</h4>
        </div>
        <div class="card-body">
          <!-- Formulario para agregar usuario -------------------------------------------------------------------------------->
          <form action="../Controlador/AdminControl.php" method="POST">
            <div class="form-check form-check-inline">
              <label class="form-check-label" for="inlineRadio1">Tipo de cuenta: </label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="1" checked="true">
              <label class="form-check-label" for="inlineRadio1">Usuario</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="2">
              <label class="form-check-label" for="inlineRadio1">Admin</label>
            </div>
            <input type="text" placeholder="Nombre " name="name" class="form-control mb-4" required="true">
            <input type="text" placeholder="Apellido" name="lastname" class="form-control mb-4" required="true">
            <input type="Email" placeholder="Email" name="email" class="form-control mb-4" required="true">
            <input type="text" placeholder="Password " name="pswd" class="form-control mb-4" required="true">
        </div>
        <div class="card-footer">
          <input type="submit" class="btn btn-success" name="addUser" value="Registrarse"> </input>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!------------------------------------------------------------------------------------->

<?php require("../Includes/footer.php"); ?>