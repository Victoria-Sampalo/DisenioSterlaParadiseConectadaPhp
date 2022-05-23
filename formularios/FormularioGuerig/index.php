<!DOCTYPE html>
<?php 
    // requerir fichero de conexion
    require_once '../inclusiones/conexion.php';
    require_once '../acciones/conseguir_zonas.php';
    require_once '../acciones/guardar_reserva.php';
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sterla's Paradise</title>
    </head>
    <body>
        <form method='GET' action="../acciones/guardar_reserva.php">
            <fieldset>
                <legend>Datos</legend>
                <p>
                    <input type="hidden" name="restaurante" value="1"/>
                    
                    <label for="zonas">Zona: </label> 
                    <select name="zonas" id="zonas">
                        
                        <?php 
                            $zonas = getZonasHawai($db);
                            if(!empty($zonas)):
                                while($zona = mysqli_fetch_assoc($zonas)):
                        ?>
                        <!-- El codzona y zonas pueden cambiar -->
                        <option value="<?=$zona['codzona']?>">
                            <?= $zona['codzona']?>
                        </option>

                        <?php
                            endwhile;
                            endif;
                        ?>
                        
                        <option value="1">lsadhfkadshkfjahjkfhl</option>
          
                    </select>
                </p>
                
                </p>
                <p>
                <label for="fecha">Fecha: </label>
                <input  type="date" name="fecha" id="fecha"/>
                </p>

                <p>
                    <label for="hora">hora: </label> 
                    <input type="time" name="hora" id="hora"/>
                </p>

                <p>
                    <label for="numpersonas">numero de personas de la reserva: </label> 
                    <input type="text" name="numpersonas" id="numpersonas"/>
                </p>

           </fieldset>
            
            <hr/>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre"/><br/>
            
            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos" id="apellidos"><br/>
            
            <label for="telefono">Telefono: </label>
            <input type="text" name="telefono" id="telefono"/><br/>
            
            <label for="email">Email: </label>
            <input type="text" name="email" id="email"/><br/>
            
            <input type="submit" name="enviar" value="Enviar"/>
        </form>
    </body>
</html>


<?php
/*

    $archivo = fopen('prueba.txt', 'a+');

    fwrite($archivo, "$nombre, $apellidos, $telefono, $email, $mesas, $notas \n");

    fclose($archivo);

*/
?>