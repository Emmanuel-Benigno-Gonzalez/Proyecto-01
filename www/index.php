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
    <title>Freelancer</title>
    
    <!--Hoja de Normalizacion para que el sitio se adapta a cada navegador-->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <!--Hoja de estilos de fuente proveniente de un sitio web externo-->
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
   
    <!--Ayuda a mejorar el rendimiento y performance del Sitio Web-->
    <link rel="preload" href="css/styles.css" as="style">
    
    <!--Referencia y relacion al archivo Styles css-->
    <link rel="stylesheet" href="css/styles.css">
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
    
    <!--Contenido Principal (Define el contenido principal del sitio Web)-->
    <main class="contenedor sombra">
        <h2>Mis Servicios</h2>

        <div class="servicios">
            <section class="servicio">
                <h3>Diseño Web</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                        <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />
                        <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
                        <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
                    </svg>
                </div>
                <p>Donec lobortis lectus interdum nulla elementum, dictum sollicitudin eros ultrices. Duis sit amet nulla viverra.</p>
            </section>
            
            <section class="servicio">
                <h3>Aplicaciones Web</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="4" y1="10" x2="4" y2="16" />
                        <line x1="20" y1="10" x2="20" y2="16" />
                        <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
                        <line x1="8" y1="3" x2="9" y2="5" />
                        <line x1="16" y1="3" x2="15" y2="5" />
                        <line x1="9" y1="18" x2="9" y2="21" />
                        <line x1="15" y1="18" x2="15" y2="21" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 7c-3 0 -4 3 -4 5.5c0 3 2 7.5 4 7.5c1.088 -.046 1.679 -.5 3 -.5c1.312 0 1.5 .5 3 .5s4 -3 4 -5c-.028 -.01 -2.472 -.403 -2.5 -3c-.019 -2.17 2.416 -2.954 2.5 -3c-1.023 -1.492 -2.951 -1.963 -3.5 -2c-1.433 -.111 -2.83 1 -3.5 1c-.68 0 -1.9 -1 -3 -1z" />
                        <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
                    </svg>
                </div>
                <p>Phasellus efficitur dui ante, a viverra tellus laoreet eget. Aliquam mollis dui sit amet metus venenatis</p>
            </section>
            
            <section class="servicio">
                <h3>E-Commerce</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="3" y="5" width="18" height="14" rx="3" />
                        <line x1="3" y1="10" x2="21" y2="10" />
                        <line x1="7" y1="15" x2="7.01" y2="15" />
                        <line x1="11" y1="15" x2="13" y2="15" />
                    </svg>
                </div>
                <p>Praesent in porta dui, vitae interdum erat. Fusce volutpat dolor leo, id tempor elit laoreet quis</p>
            </section>
        </div>
    
        <section>
            <h2>Contacto</h2>

            <form class="formulario" method="post" acttion="index.php">
                <!--fieldset: Permite Agrupar un Grupo de Campos-->
                <fieldset>
                    <legend>Contactanos llenando todos los campos</legend>
                    
                    <div class="contenedor-campos">
                        <!--Div: Argupa componentes generales
                        -Es una etiqueta generica de agrupamiento
                        -Es indispensable cuando no aplica el section, main, header, footer
                        -->
                        <div class="campo">
                            <label for="">Nombre</label>
                            <input class="input-text" name="nombre" type="text" placeholder="Tu Nombre">
                        </div>
                                        
                        <div class="campo">
                            <label for="">Teléfono</label>
                            <input class="input-text" name="telefono" type="tel" placeholder="Tu Teléfono">
                        </div>
                        
                        <div class="campo">
                            <label for="">Correo</label>
                            <input class="input-text" name="correo" type="email" placeholder="Tu Email">
                        </div>
                        
                        <div class="campo">
                            <label for="">Mensaje</label>
                            <textarea class="input-text" name="mensaje"></textarea>
                        </div>
                    </div>

                    <div class="alinear-derecha flex">
                        <input class="boton w-sm-100" name="insertar" type="submit" value="Enviar">
                    </div>
                    
                </fieldset>
            </form>

            <?php
                if(isset($_POST['insertar'])){
                    $usuario = $_POST['nombre'];
                    $telefono = $_POST['telefono'];
                    $correo = $_POST['correo'];
                    $mensaje = $_POST['mensaje'];

                    $sql_insert = "INSERT INTO `USUARIOS`(`usuario`,`telefono`,`correo`,`mensaje`) VALUES ('$usuario','$telefono','$correo','$mensaje')";

                    $ejecutar = mysqli_query($conn,$sql_insert);

                    if($ejecutar){
                        echo "<script>alert('USUARIO REGISTRADO')</script>";
                        echo "<script>window.open('index.php','_self')</script>";
                    }else{
                        echo "<script>alert('ERROR AL INSERTAR')</script>";
                        echo "<script>window.open('index.php','_self')</script>";
                    }

                }

            ?>

        </section>
    </main>
    
    <!--Pie de Pagina-->
    <footer class="footer">
        <p>Todos los Derechos Reservados. Emmanuel Benigno Freelancer</p>
    </footer>

</body>
</html>