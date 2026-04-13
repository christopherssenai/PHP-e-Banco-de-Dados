<!-- Conexão com Banco de Dados -->
 <?php
    // Definindo quatro(4) constantes

    define('HOST', 'localhost');
    define('DATABASENAME', 'crud-mvc-poo-php-cs');
    define('USER', 'root');
    define('PASSWORD', 'root');

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }

        function connectDatabase(){
            try{
                $this->connection = new PDO('mysql:host+' .HOST. ';dname=' .DATABASENAME, USER, PASSWORD);
            }
            catch (PDOException $e){
                echo "Error!".$e->getMessage();
                die();
            }
        }
    }

    $testConnection = new Connect();
?>