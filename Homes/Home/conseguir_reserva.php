<!DOCTYPE html>
<?php
    require_once '../../inclusiones/conexion.php';
    require_once '../../acciones/conseguir_zonas.php';
    
    // Guardar datos de la url 
    $nombre = isset($_GET['nombre']) ? mysqli_real_escape_string($db, $_GET['nombre']) : false; 
    
    $reserva = getReservaCliente($db, $nombre);
    if(mysqli_fetch_assoc($reserva) > 1):
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sterla's Paradise</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <link rel="stylesheet" href="css/button-style.css"/>
	<link rel="shortcut icon" href="images/logo_principal.png" />
    </head>
    <body>
        <div id="central">

            <div><img src="images/logo_principal.png" alt="sterlaParadise" title="sterlaParadise"></div>
	
        </div>
        <h1 class="h1-reserva">
            <?php
                    $reserva = getReservaCliente($db, $nombre);
                    if(!empty($reserva)):
                        while($cliente = mysqli_fetch_assoc($reserva)):
                ?>
                    Estimad@ <?=$cliente['nomcli']?> <?=$cliente['apecli']?> tiene una reserva en:
            <?php
                    endwhile;
                endif;
            ?>
            
        </h1>
        <form method='GET' action="">
            
            <div class="comprobarReserva"> 
                <div class="divReserva">
                    <label for="restaurante" class="label-reserva">Restaurante</label>
                    <?php
                        $reserva = getReservaCliente($db, $nombre);
                        if(!empty($reserva)):
                            while($cliente = mysqli_fetch_assoc($reserva)):
                    ?>    
                                <?php
                                if($cliente['codrest'] == 1):
                                ?>
                                    <input type="text" name="zonas" id="zonas" class="reservaDatos" value="Hawai">
                                <?php
                                elseif ($cliente['codrest'] == 2):
                                ?>
                                    <input type="text" name="zonas" id="zonas" class="reservaDatos" value="Cerdeña">
                                <?php
                                elseif ($cliente['codrest'] == 3):
                                ?>
                                    <input type="text" name="zonas" id="zonas" class="reservaDatos" value="Marbella">
                                <?php
                                elseif ($cliente['codrest'] == 4):
                                ?>
                                    <input type="text" name="zonas" id="zonas" class="reservaDatos" value="London">
                                <?php
                                    endif;
                                ?>
                    <?php
                            endwhile;
                        endif;
                    ?>
                </div>
                <div class="divReserva">                    
                    <label for="zonas" class="label-reserva">Zona: </label>
                    <?php
                        $reserva = getReservaCliente($db, $nombre);
                        if(!empty($reserva)):
                            while($cliente = mysqli_fetch_assoc($reserva)):
                    ?>    
                                <?php
                                if($cliente['codzona'] == 1):
                                ?>
                                    <input type="text" name="zonas" id="zonas" class="reservaDatos" value="Interior">
                                <?php
                                elseif ($cliente['codzona'] == 2):
                                ?>
                                    <input type="text" name="zonas" id="zonas" class="reservaDatos" value="Exterior">
                                <?php
                                    endif;
                                ?>
                    <?php
                            endwhile;
                        endif;
                    ?>
                </div>
                <div class="divReserva">
                    <label for="fecha" class="label-reserva">Fecha: </label>
                    <?php
                        $reserva = getReservaCliente($db, $nombre);
                        if(!empty($reserva)):
                            while($cliente = mysqli_fetch_assoc($reserva)):
                    ?>
                                <input  type="text" name="fecha" id="fecha" class="reservaDatos" value="<?=$cliente['fecres']?>"/>
                    <?php
                            endwhile;
                        endif;
                    ?> 
                </div>
                <div class="divReserva">
                    <label for="hora" class="label-reserva">hora: </label> 
                    <?php
                        $reserva = getReservaCliente($db, $nombre);
                        if(!empty($reserva)):
                            while($cliente = mysqli_fetch_assoc($reserva)):
                    ?>        
                                <input type="text" name="hora" id="hora" class="reservaDatos" value="<?=$cliente['horares']?>"/>
                    <?php
                            endwhile;
                        endif;
                    ?>  
                </div>
                <div class="divReserva">
                    <label for="numpersonas" class="label-reserva">numero de personas: </label> 
                <?php
                    $reserva = getReservaCliente($db, $nombre);
                    if(!empty($reserva)):
                        while($cliente = mysqli_fetch_assoc($reserva)):
                ?>
                            <input type="text" name="numpersonas" id="numpersonas" class="reservaDatos" value="<?=$cliente['numper']?>"/>
                <?php
                        endwhile;
                    endif;
                ?>
                </div>
                <div class="comprobarReserva">
                    <h2 class="h2-reserva">Datos de contacto:</h2>
                    <div class="divReserva">
                        <label for="telefono" class="label-reserva">Telefono: </label>
                        <?php
                            $reserva = getReservaCliente($db, $nombre);
                            if(!empty($reserva)):
                                while($cliente = mysqli_fetch_assoc($reserva)):
                        ?>
                                    <input type="text" name="telefono" id="telefono" class="reservaDatos" value="<?=$cliente['tlfcli']?>"/><br/>
                        <?php
                                endwhile;
                            endif;
                        ?>
                    </div>
                    <div class="divReserva">
                        <label for="email" class="label-reserva">Email: </label>
                        <?php
                            $reserva = getReservaCliente($db, $nombre);
                            if(!empty($reserva)):
                                while($cliente = mysqli_fetch_assoc($reserva)):
                        ?>
                                    <input type="text" name="email" id="email" class="reservaDatos" value="<?=$cliente['emailcli']?>"/><br/>
                        <?php
                                endwhile;
                            endif;
                        ?>
                    </div>
                    <div class="comprobarReserva">
                        <button id="boton-inicio"><a href="index.html" class="a-reserva">Volver al inicio</a></button>
                    </div>
                </div>
        </form>
    </body>
</html>
<?php
    else: header("Refresh: 0; URL= index.php");
    endif;
?>

