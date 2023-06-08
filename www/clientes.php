<?php
    $conn = mysqli_connect('database', 'root', 'test', "usuarios");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!--Datos que requiere/entiende el navegador-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Nombre de identificacion en la Web-->
    <title>Clientes</title>
    
    <!--Hoja de Normalizacion para que el sitio se adapta a cada navegador-->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <!--Hoja de estilos de fuente proveniente de un sitio web externo-->
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
   
    <!--Ayuda a mejorar el rendimiento y performance del Sitio Web-->
    <link rel="preload" href="css/styles.css" as="style">
    
    <!--Referencia y relacion al archivo Styles css-->
    <link rel="stylesheet" href="css/styles.css">

    <!--Ayuda a mejorar el rendimiento y performance del Sitio Web-->
    <link rel="preload" href="css/styles_tabla.css" as="style">
    
    <!--Referencia y relacion al archivo Styles css-->
    <link rel="stylesheet" href="css/styles_tabla.css">
</head>
<body>

    <!--Encabezado-->
    <header>
        <?php
			include 'header.php';
		?>
    </header>
    
    <!--Barra de Navegacion-->
    <div class="nav-bg">
        <?php
			include 'menu.php';
		?>
    </div>
    
    <section class="hero">
        <?php
			include 'hero.php';
		?>
    </section>

    <section class="tabla">
    
        <h3>Clientes</h3>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
    
            <?php
                echo "";

                $sql_consulta = 'SELECT * FROM USUARIOS';
                $result = mysqli_query($conn, $sql_consulta);

                $i = 0;

                while($fila=mysqli_fetch_array($result)){
                    $id = $fila['id'];
                    $usuario = $fila['usuario'];
                    $telefono = $fila['telefono'];
                    $correo = $fila['correo'];
                    $mensaje = $fila['mensaje'];

                    $i++;
            ?>
                
            <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $usuario; ?></td>
                    <td><?php echo $telefono; ?></td>
                    <td><?php echo $correo; ?></td>
                    <td><?php echo $mensaje; ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </section>
    
    <!--Pie de Pagina-->
    <footer class="footer">
        <p>Todos los Derechos Reservados. Emmanuel Benigno Freelancer</p>
    </footer>

</body>
</html>