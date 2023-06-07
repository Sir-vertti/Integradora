<?php
// Paso 1: Conectarse a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Debes ingresar tu contraseña de base de datos aquí
$dbname = "bdbiblio";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Paso 2: Recibir los datos del formulario
if (isset($_POST['submit'])) {
    $usuario = $_POST['NoControl'];
    $contraseña = $_POST['Curp'];

    // Paso 3: Validar los datos en tabla "alumnos"
    $stmtAlumnos = $conn->prepare("SELECT IdAlum FROM alumnos WHERE NoControl = ? AND Pass = ?");
    $stmtAlumnos->bind_param("ss", $usuario, $contraseña);
    $stmtAlumnos->execute();
    $stmtAlumnos->store_result();

    // Paso 4: Validar los datos en tabla "administativos" (corregido de "administrativos")
    $stmtAdministativos = $conn->prepare("SELECT IdAdmin FROM administativos WHERE NoTrabjador = ? AND PassAdmin = ?");
    $stmtAdministativos->bind_param("ss", $usuario, $contraseña);
    $stmtAdministativos->execute();
    $stmtAdministativos->store_result();

    if ($stmtAlumnos->num_rows > 0) {
        $resultado = array('error' => false, 'mensaje' => '¡Inicio de sesión exitoso para alumnos!');
        header("Location: pagina.html");
        exit();
    } elseif ($stmtAdministativos->num_rows > 0) {
        $resultado = array('error' => false, 'mensaje' => '¡Inicio de sesión exitoso para administrativos!');
        header("Location: admin.html");
        exit();
    } else {
        $resultado = array('error' => true, 'mensaje' => 'Usuario o contraseña incorrectos');
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioUTeM</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <style>
        .justify-text {
            text-align: justify;
        }
    </style>
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #d3cbcb;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="img/logoutem.png" class="img-fluid" style="max-width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Somos la Biblioteca UTeM</h4>
                                    </div>
                                    <form method="post">
                                        <p>Inicia sesión</p>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="NoControl" name="NoControl" class="form-control" placeholder="Número de control" />
                                            <label class="form-label" for="NoControl">Usuario</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="Curp" name="Curp" class="form-control" placeholder="Contraseña" />
                                            <label class="form-label" for="Curp">Contraseña</label>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit">Iniciar sesión</button>
                                            <a class="text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4 justify-text">
                                    <h4 class="mb-4">"Un libro, como un viaje, se comienza con inquietud y se termina con melancolía." - José Vasconcelos.</h4>
                                    <p class="small mb-0">"La paradoja del amor", según Fromm, "se trata de ser uno mismo sin dejar de ser dos. En el amor, somos dos almas con un solo pensamiento, somos dos corazones que laten como uno".</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <h6>© Todos los derechos reservados Carlos Guillermo, 416E676965 ❤️</h6>
    </footer>
</body>
</html>
