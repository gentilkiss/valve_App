<?php
// require_once('config/config.php');
$pages = scandir('pages/');
// print_r($pages) ;
$page_function = scandir('functions/');
if (isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.html',$pages)) 
{
    $page=$_GET['page'];
}
else 
{
    $page = "login";
}


// if (in_array($page.'.func.html',$page_function)) 
// {
//    include_once('functions/'.$page.'.func.html');
   
// }
// else 
// {
//     $page = "login";   
//     include_once('functions/'.$page.'.func.html');
// }
?>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <?php
    $function = scandir('functionsjs/');
    if (in_array($page.'.func.js',$function)) 
    {?>
        <script src="functionsjs/<?=$page?>.func.js"></script>
    <?php
    }
    ?>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title><?=$page?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/select2/css/select2.css">
    <link rel="stylesheet" href="../assets/vendor/summernote/css/summernote-bs4.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
</head>

<body>

<?php include_once('pages/'.$page.'.html') ?>
<!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->


    
 
</body>
</html>