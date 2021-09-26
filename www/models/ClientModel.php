<?php 

    class ClientModel {
        public function getAll() {
            require_once('db/Connection.php');
            
            $connection = new Connection();
            $connection -> openConnection();
            $conn = $connection -> getConnection();

            $sql = 'SELECT * FROM clients';

            return $conn -> query($sql);
        }
    }

?>