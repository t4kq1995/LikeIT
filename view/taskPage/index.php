<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      <!-- left part -->
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <?php require_once("default/header.php"); ?>

          <div class="clearfix"></div>

          <?php require_once("default/leftProfile.php"); ?>

          <br />

          <?php require_once("default/sidebar.php"); ?>
        </div>
      </div>
      <!-- /left part -->

      <!-- navigation -->
      <?php require_once("default/topNavigation.php"); ?>
      <!-- /navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- statistic -->
        <?php require_once("default/statistic.php"); ?>
        <!-- /statistic -->

        <!-- add form -->
        <?php
          if ($_SESSION['shared_future']['access'] == 3) {
            require_once("addForm.php");
          }
        ?>
        <!-- /add form -->

        <!-- task list -->
        <?php require_once("taskList.php"); ?>
        <!-- /task list -->

        <!-- contacts -->
        <?php require_once("contacts.php"); ?>
        <!-- /contacts -->
      </div>
      <!-- /page content -->

      <!-- footer -->
      <?php require_once("default/footer.php"); ?>
      <!-- /footer -->

    </div>
  </div>

  <!-- NProgress -->
  <script src="assets/nprogress/nprogress.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- App -->
  <script type="text/javascript" src="assets/default/js/taskPage.js"></script>
</body>