
<?php

    class ClientController {
        
        public function register() {
            require_once('views/templates/header.php');
            require_once('views/client/register.php');
        }

        public function registerView() {

            if(isset($_POST['accept'])) {
                $accept = true;
            } else {
                $accept = false;
            }

            $arrayClient = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'gender' => $_POST['gender'],
                'accept' => $accept
            );

            require_once('views/templates/header.php');
            require_once('views/client/register-view.php');

        }

        public function listClients() {
            require_once('models/ClientModel.php');
            
            $clientModel = new ClientModel();
            $resultSql = $clientModel -> getAll();
            
            $arrayClients = array();
            while($resultLine = $resultSql -> fetch_assoc()) {
                array_push($arrayClients, $resultLine);
            }

            require_once('views/templates/header.php');
            require_once('views/client/list-clients.php');
        }
    }

?>