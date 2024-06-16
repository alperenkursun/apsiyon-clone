<?php 
    session_start();
    ob_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <?php include("page/template/head.php"); ?>
    </head>
    <body>
        <?php include("page/template/menu.php"); ?>

        <?php 
            if($_REQUEST['page'] == "" or $_REQUEST['page'] == "index")
            {
                $output = include("page/index.php");
            }
            else
            {
                $output = include("page/".$_REQUEST['page'].".php");
            }

            if($output == "")
            {
                include("page/error.php");
            }
        ?>

        <?php include("page/template/footer.php"); ?>
        <?php include("page/template/footer_script.php"); ?>
    </body>
</html>