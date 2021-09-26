<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!---->

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" type="text/javascript"></script>

</head>
<body>
   
    <?php

        ini_set('display_errors', 1);

        if(!isset($_GET['controller'])) {
            require_once('controllers/SiteController.php');
            $siteController = new SiteController();
            $siteController -> home();
        } else {
            switch($_REQUEST['controller']) {
                case 'site':
                    require_once('controllers/SiteController.php');
                    $siteController = new SiteController();
                    if(!isset($_GET['action'])) {
                        $siteController -> home();
                    } else {
                        switch($_REQUEST['action']) {
                            case 'home':
                                $siteController -> home();
                                break;
                            case 'about':
                                $siteController -> about();
                                break;
                            case 'contact':
                                $siteController -> contact();
                                break;
                        }
                    }
                    break;
                
                case 'client':
                    require_once('controllers/ClientController.php');
                    $clientController = new ClientController();
                    if(!isset($_GET['action'])) {
                        $clientController -> register();
                    } else {
                        switch ($_REQUEST['action']) {
                            case 'register':    
                                $clientController -> register();
                                break;
                            case 'register-view':
                                $clientController -> registerView();
                                break;
                            case 'list-clients':
                                $clientController -> listClients();
                                break;
                        }
                    }
                    break;
            }
        }
    
    ?>
    
</body>
</html>