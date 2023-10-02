<?PHP

include(conexion.php);

function connect_postgreSQl( host, user, password)

    {

         $connection = pg_connect( " host='files.000webhost.com' dbname=d2277cfqe7bpu7 Port='21' user='laboratoriesfranco' password='Hello.12345' "

                               ) or die( "Error al conectar: ".pg_last_error() );

      

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

  pg_query_close($connection);

};

?>

