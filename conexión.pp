<?PHP

function connect_postgreSQl( host, dbname user, password)

    {

         $connection = pg_connect( " host='ec2-52-5-1-20.compute-1.amazonaws.com' dbname=d2277cfqe7bpu7 Port=5432 user=bwopcndfxoaqai password=fd76e1ba2aa84228cce2e924614001aadd453c9f6eb6fa76d49ec13cd2810a94 "

                               ) or die( "Error al conectar: ".pg_last_error() );

      

      if($connection){

    echo"bien está guardado",

}else {

    echo"error al guardar";

}

      

        return $connection;

    }

?>

