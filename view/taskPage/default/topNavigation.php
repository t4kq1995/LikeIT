<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="assets/default/images/<?php echo $_SESSION['shared_future']['image']; ?>" alt=""><?php echo $_SESSION['shared_future']['username']; ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="index.php"><i class="fa fa-home pull-right"></i> Main page</a></li>
            <li><a id="logout_button" href=""><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->