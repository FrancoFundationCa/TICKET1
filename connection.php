<?PHP

include(dataconnection.php);

class connection{

    function connect (){

        try {

           //$connection = new PDO("MySQL:host=".SERVER.";dbname=".DBNAME, , USER, PASSWORD),

           $connection = new PDO("pgsql:host=".ec2-52-5-1-20.compute-1.amazonaws.compute-1."; Port=5432; dbname=".d2277cfqe7bpu7." , USER=".bwopcndfxoaqai.", PASSWORD=".fd76e1ba2aa84228cce2e924614001aadd453c9f6eb6fa76d49ec13cd2810a94."),

           return $connection;

        } catch (Exception $error) {

            die("the error of connection is:".$error->getMesseger());

        }

    }

    }

    

    }
