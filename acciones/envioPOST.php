<?php

$zona = isset($_GET['zonas']) ? mysqli_real_escape_string($db, $_GET['zonas']) : false;
    $fecha = isset($_GET['fecha']) ? mysqli_real_escape_string($db, $_GET['fecha']) : false;
    $hora = isset($_GET['hora']) ? mysqli_real_escape_string($db, $_GET['hora']) : false;
    //$minuto = isset($_GET['3A']) ? mysqli_real_escape_string($db, $_GET['3A']) : false;
    $numpersonas = isset($_GET['numpersonas']) ? mysqli_real_escape_string($db, $_GET['numpersonas']) : false;
    $restaurante = isset($_GET['restaurante']) ? mysqli_real_escape_string($db, $_GET['restaurante']) : false;
   
    // Cliente
    $nombre = isset($_GET['nombre']) ? mysqli_real_escape_string($db, $_GET['nombre']) : false;
    $apellidos = isset($_GET['apellidos']) ? mysqli_real_escape_string($db, $_GET['apellidos']) : false;
    $telefono = isset($_GET['telefono']) ? mysqli_real_escape_string($db, $_GET['telefono']) : false;
    $email = isset($_GET['email']) ? mysqli_real_escape_string($db, $_GET['email']) : false;
    
    
    
    /*
    
    $zona = isset($_POST['zonas']) ? mysqli_real_escape_string($db, $_POST['zonas']) : false;
    $fecha = isset($_POST['fecha']) ? mysqli_real_escape_string($db, $_POST['fecha']) : false;
    $hora = isset($_POST['hora']) ? mysqli_real_escape_string($db, $_POST['hora']) : false;
    //$minuto = isset($_GET['3A']) ? mysqli_real_escape_string($db, $_GET['3A']) : false;
    $numpersonas = isset($_POST['numpersonas']) ? mysqli_real_escape_string($db, $_POST['numpersonas']) : false;
    $restaurante = isset($_POST['restaurante']) ? mysqli_real_escape_string($db, $_POST['restaurante']) : false;
   
    // Cliente
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $telefono = isset($_POST['telefono']) ? mysqli_real_escape_string($db, $_POST['telefono']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    
    
    
                    <label for="nombre">Nombre: </label>
                <?php
                    $reserva = getReservaCliente($db, $nombre);
                    if(!empty($reserva)):
                        while($cliente = mysqli_fetch_assoc($reserva)):
                ?>
                            <input type="text" name="nombre" id="nombre" value="<?=$cliente['nomcli']?>"/><br/>
                <?php
                        endwhile;
                    endif;
                ?>
                <label for="apellidos">Apellidos: </label>
                <?php
                    $reserva = getReservaCliente($db, $nombre);
                    if(!empty($reserva)):
                        while($cliente = mysqli_fetch_assoc($reserva)):
                ?>
                            <input type="text" name="apellidos" id="apellidos" value="<?=$cliente['apecli']?>"/><br/>
                 <?php
                        endwhile;
                    endif;
                ?>*/