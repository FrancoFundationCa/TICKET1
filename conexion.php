<?PHP

function connect_postgreSQl( host, dbname user, password)

    {

         $connection = pg_connect( " host='files.000webhost.com' dbname=d2277cfqe7bpu7 Port=21 user=laboratoriesfranco password=Hello.12345 "

                               ) or die( "Error al conectar: ".pg_last_error() );

      

      if($connection){

    echo"bien está guardado",

}else {

    echo"error al guardar";

}

      

        return $connection;

    }

?>

