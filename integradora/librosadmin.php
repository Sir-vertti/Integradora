<?php
  //llamar nuestro archivo de configurcion
  require_once('configuracion2.php');
  //Crear una variable para hacer una lista de los registros de la tabla
  $result=mysqli_query($mysqli, "SELECT * FROM libros ORDER BY Idlibro asc");

  //SELECT * FROM estudiantes;
  //SELECT * FROM nombre, appat, apmat FROM estudiantes;
  //SELECT * FROM estudiantes ORDER BY Id

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="estilospaginas.css">
    <title>Libros Admin</title>
</head>
<body>
  <div class="topnav acomo" id="myTopnav">
    <a href="admin.php">Home</a>
    <a href="#news" class="active">Libros</a>
    <a href="alumnosadmin.php">Alumnos</a>
    <a href="#contact">Contactos</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div class="tablaL">
    <div class="table-responsive">

      <table class="table table-striped table-sm">

        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">No. Folio</th>
            <th scope="col">Nombre</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Copias</th>
            <th scope="col">Categorias</th>
            <th scope="col">Edicion</th>
            <th scope="col">Publicacion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>

        <tbody>
          <?php
            while ($res=mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $res['Idlibro'] . "</td>";
              echo "<td>" . $res['NoFolio'] . "</td>";
              echo "<td>" . $res['NombreLibro'] . "</td>";
              echo "<td>" . $res['Autor'] . "</td>";
              echo "<td>" . $res['Editorial'] . "</td>";
              echo "<td>" . $res['Copias'] . "</td>";
              echo "<td>" . $res['Categoria'] . "</td>";
              echo "<td>" . $res['Edicion'] . "</td>";
              echo "<td>" . $res['yearPublic'] . "</td>";
              echo "<td> <a href =\"deletealum.php?id=$res[IdAlum]\" onClick=\"return confirm('Seguro que quieres eliminar el registro')\" class='btn btn-danger'>Eliminar</a>   </td>";
              echo "</tr>";
            
            }
          ?>
          
          

        </tbody>

      </table>

    </div>

  </div>


</body>
</html>