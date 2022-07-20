<?php
// require_once('../../config/config.php');
$pages = scandir('pages/');
// print_r($pages) ;
// $page_function = scandir('functions/');
if (isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.html',$pages)) 
{
    $page=$_GET['page'];
}
else 
{
    $page = "Admin";
}


// if (in_array($_GET['page'].'.func.php',$page_function)) 
// {
//    include_once('functions/'.$page.'.func.php');
   
// }
// else 
// {
//     $page = "login";   
//     include_once('functions/'.$page.'.func.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Optional JavaScript -->
	<!-- jquery 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 3.3.1 -->
    <script src="../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../../assets/libs/js/main-js.js"></script>
    <!-- morris-chart js -->
    <script src="../../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../../assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="../../assets/vendor/charts/morris-bundle/morrisjs.html"></script>
    <!-- chart js -->
    <script src="../../assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="../../assets/vendor/charts/charts-bundle/chartjs.js"></script>
    <!-- dashboard js -->
    <?php
    $function = scandir('functionjs/');
    if (in_array($page.'.func.js',$function)) 
    {?>
        <script src="functionjs/<?=$page?>.func.js"></script>
    <?php
    }
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/libs/css/style.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    
    <title><?=$page?></title>
<style type="text/css">/* Chart.js */
    @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
</style>

</head>
<body>

<?php include_once('pages/'.$page.'.html') ?>
<!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
</body>
</html>