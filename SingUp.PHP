<?PHP

include(conexion.php);

      if($connection){

    echo"bien está guardado",

}else {

    echo"error al guardar";

}

      

        return $connection;

    }

    function insertarClientes( $connection, $nombres, $apellidos, $numbercard, $email, $tlf, $comentarios )

    {

        $sql = "INSERT INTO participantes VALUES(".nombres.", ".apellidos.", ".numbercard.", ".email.", ".tlf.", ".comentarios." , "..")";

        // Ejecutamos la consulta (se devolverá true o false):

       return pg_query ($connection, $sql);

       

     $result = pg_query($connection, $sql);

       if (!$result) {

    '<script> alert("error intenté de nuevo");

    window.history.go.(-1);

    </script>'

    

       }else {

'<script> alert("listo todo echo");

window.history.go.(-1);

</script>'


};

?>

