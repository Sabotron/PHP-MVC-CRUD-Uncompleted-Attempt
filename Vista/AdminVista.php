<?php
require_once("../Includes/head.php");
require("../Controlador/AdminControl.php");
adminSession();
?>
<div class="container">
  <div class="row">
    <div class="col-lg-10 m-auto">
      <div class="card mt-5">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <p class="nav-link active">Bienvenid@ <?php echo $_SESSION['user']['name'] ?> </p>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Vista/PublicVista.php">Página Principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Vista/LoginVista.php">Logout</a>
          </li>
        </ul>
        <div class="card-header">
          <h2 class="card-title">Administrador</h2>
          <br>
          <h4>Usuarios Registrados</h4>
        </div>
        <div class="card-body">
          <?php //  $db -> display_message(); 
          ?>
          <table class="table table-bordered">
            <tr>
              <th> ID </th>
              <th> Categoría </th>
              <th> Acciones </th>
            </tr>
            <?php // Recorre las fuentes creadas del usuarui y las muestra con botones de editar/eliminar.
            $users = getUsers()->fetchAll(); // functions.php
            foreach ($users as $user) { ?>
              <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><a href="../Vista/EditUserVista.php?id=<?php echo $user['id'] ?>" class="btn btn-success"> Editar </a>
                  <a href="../Controlador/DeleteControl.php?id=<?php echo $user['id'] ?>" class="btn btn-danger"> Eliminar </a>
                </td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once("../Includes/footer.php"); ?>