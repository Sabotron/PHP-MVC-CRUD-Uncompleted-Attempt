<?php
require_once("../Controlador/AdminControl.php");
require_once("../Includes/head.php");
adminSession();
$user = getUser()->fetch();
    // Edita Usuarios
    //errorHandler();
?>

<div class="container">
  <div class="row">
    <div class="col-lg-10 m-auto">
      <div class="card mt-5">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" href="../Vista/AdminVista.php">Cancelar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Vista/PublicVista.php">Página Principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Vista/LoginVista.php">Logout</a>
          </li>
        </ul>
        <div class="card-header">
          <h2 class="card-title">Editar Usuario</h2>
          <br>
          <h4 class="card-subtitle">Modificar Información</h4>
        </div>
        <div class="card-body">
          <!-- Formulario para modificar usuario -------------------------------------------------------------------------------->
          <form action="../Controlador/AdminControl.php?id=<?php echo $_GET['id']; ?>" method="POST">
           <input type="text" placeholder="Nombre " name="name" class="form-control mb-4" required="true" value="<?php echo $user['name']?>">
            <input type="text" placeholder="Apellido" name="lastname" class="form-control mb-4" required="true" value="<?php echo $user['lastname']?>">
            <input type="Email" placeholder="Email" name="email" class="form-control mb-4" required="true" value="<?php echo $user['email']?>">
            <input type="text" placeholder="Password " name="pswd" class="form-control mb-4" required="true" value="<?php echo $user['pswd']?>">
     </div>
        <div class="card-footer">
          <input type="submit" class="btn btn-success" name="UpdtUser" value="Guardar Cambios"> </input>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!------------------------------------------------------------------------------------->

<?php require("../Includes/footer.php"); ?>