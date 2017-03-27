<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shared Future</title>

    <link rel="shortcut icon" href="assets/default/images/favicon.ico" type="image/png">

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom css -->
    <link href="assets/default/css/custom.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="assets/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="assets/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="assets/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="assets/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="assets/default/css/style.css">
  </head>

  <!-- jQuery -->
  <script src="assets/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- PNotify -->
  <script src="assets/pnotify/dist/pnotify.js"></script>
  <script src="assets/pnotify/dist/pnotify.buttons.js"></script>
  <script src="assets/pnotify/dist/pnotify.nonblock.js"></script>
  <!-- Select2 -->
  <script src="assets/select2/dist/js/select2.full.min.js"></script>

  <?php
    /**************** Access provider *****************/
    $access = isset($_SESSION['shared_future']['id']);

    if ($access) {
        require_once("view/taskPage/index.php");
    } else {
        require_once("view/mainPage/accessPage.html");
    }

  ?>

</html>