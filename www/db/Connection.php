<?php 

    class Connection {

        var $conn;

        public function openConnection() {
            $server = 'db';
            $user = 'root';
            $password = 'test';
            $dbname = 'pw_exemple';

            $this -> conn = new mysqli($server, $user, $password, $dbname);

            if ($this -> conn -> connect_error) {
                die("Connection error ->". $this -> conn -> connect_error);
            }
        }

        public function getConnection() {
            return $this -> conn;
        }
    }

?>