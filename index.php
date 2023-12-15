<?php
    session_start();
    // $_SESSION['POST'] = $_REQUEST['action'];
    include('./app/dd.php');
    include('./app/readEnv.php');
    include('./app/viewLoader.php');
    include('./app/listRandomizer.php');
   // dd::dd($_SESSION);
   // if($_REQUEST){ header('location: /', false);};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta HTTP-EQUIV="Pragma" content="no-cache">
    <meta HTTP-EQUIV="Expires" content="-1"> 
    <title>shop4web</title>
    <link rel="stylesheet" href="style.css" >
    <script src="./js/htmx.min.js"></script>
</head>
<body>
    <?php
        viewLoader::load('top');
        
        // if(!isset($_GET['action'] ) || $_GET['action'] == 'home') {
        //     viewLoader::load('body.home');
        // } elseif( $_GET['action'] == 'consulting' ){
        //     viewLoader::load('body.consulting');
        // }

        switch ($_GET['action'])
        {
            case 'home':
                viewLoader::load('body.home');
                break;
            
            case 'consulting':
                viewLoader::load('body.consulting');
                break;
            
            case 'webdev':
                viewLoader::load('body.webdev');
                break;
                
            case 'about':
                viewLoader::load('body.about');
                break;

            default:
                viewLoader::load('body.home');
        }

        
        viewLoader::load('bottom');
        
        
    ?>
</body>
</html>