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
    <meta name="robots" content="all">
    <meta name="keywords" content="web design, web development, Infrastructure " >
    <title>Shop for your web and infrastructure solutions</title>
    <meta name="description" content="Business , Web and Infrastructure solutions on a budget for startups and small businesses">
    <link rel="stylesheet" href="style.css" >
    <?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/"; ?>
<link rel=”canonical” href=”<?php echo $actual_link; ?>” >
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
            case 'portfolio':
                viewLoader::load('body.portfolio');
                break;

            default:
                viewLoader::load('body.home');
        }

        
        viewLoader::load('bottom');
        
        
    ?>
</body>
</html>