<?php
    include('./app/viewLoader.php');
    include('./app/listRandomizer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop4web</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <?php
        listRandomizer::getList('./data/lists.linux.links');
        // include('./view/top.view.php');
        // echo viewLoader::load('top');
        viewLoader::load('top');
        viewLoader::load('body');
        viewLoader::load('bottom');
        // include('./view/body.view.php');
        echo '<h1 class="bg-blue-300" >Hello PHP</h1>';
    ?>
</body>
</html>