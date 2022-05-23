<?php

if(!empty($_GET)){
    require_once '../inclusiones/conexion.php';

    
    /* LECCIÓN DE HOY
        Si no estableces el tipo se guarda como boolean, no nos habia pasado porque al hacer la validación ya colocabamos que el envio tenía que ser de tipo string
    */
    
    // ---------------- Escapar datos ---------------
    
    // Reserva
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
        
    // Comprobar si se puede realizar la reserva
    $sql = "SELECT reservaPosible('$restaurante', '$zona', '$numpersonas', '$fecha', '$hora')";

    $comprobar = mysqli_query($db, $sql);
    var_dump($comprobar);
    var_dump(mysqli_real_escape_string($db, $sql));
    var_dump(mysqli_fetch_assoc($comprobar));
 
    
    if(mysqli_fetch_assoc($comprobar) == 0){
            
            $sql = "SELECT realizarReserva('$fecha', '$hora', '$numpersonas', '$nombre', '$apellidos', '$telefono', '$email', '$zona', '$restaurante');";

            $guardarDatos = mysqli_query($db, $sql);

            echo "<h1>Su reserva se ha realizado correctamente Sr/Sra $nombre $apellidos</h1><br/>";
            echo "<img src='../../acciones/gato.gif' alt='gato comiendo' title='gato comiendo'>";
            
            /*if($restaurante == 1){
                header("Refresh: 5; URL= ../Homes/Home_Hawai/carta.html");
            } elseif ($restaurante == 2) {
                header("Refresh: 5; URL= ../Homes/Home_Cerdenya/menu.html");
            }elseif ($restaurante == 3) {
                header("Refresh: 5; URL= ../Homes/Home_Marbella/menuMarbella.html");
            }elseif ($restaurante == 4){
                header("Refresh: 5; URL= ../Homes/Home_Brasas_London/reserva.php");
            }
         */
    }else if(mysqli_fetch_assoc($comprobar) == 1){
        echo "No se puede realizar esta reserva.";
        //header("Refresh: 5; URL= ../Homes/Home_Brasas_London/reserva.php");
    }
    
  
   // var_dump($comprobar);
    var_dump(mysqli_real_escape_string($db, $sql));
   // var_dump(mysqli_fetch_assoc($comprobar));
    
    
    // Mostrar la última reserva añadida
    $comprobacion = "SELECT * FROM reservas ORDER BY codreserva DESC LIMIT 1";
    $resultadoComprob = mysqli_query($db, $comprobacion);
    
    while($prueba = mysqli_fetch_assoc($resultadoComprob)){
        var_dump($prueba);
    }
    
    // Recargar la página principal después de realizar la reserva
    
    //header("Refresh: 5; URL=/sterlas_paradise/html/index.php");
    
}

?>