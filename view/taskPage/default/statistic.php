<!-- top tiles -->
<?php require_once('controller/taskPage/statistic.php'); ?>
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
    <div class="count green"><?php echo $answer[0]['total_users']; ?></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-clock-o"></i> Total Programmers</span>
    <div class="count green"><?php echo $answer[1]['total_programmers']; ?></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Team Leaders</span>
    <div class="count green"><?php echo $answer[2]['total_team_leaders']; ?></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Leaders</span>
    <div class="count green"><?php echo $answer[3]['total_leaders']; ?></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Tasks</span>
    <div class="count green"><?php echo $answer[4]['total_tasks']; ?></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Finish Tasks</span>
    <div class="count green"><?php echo $answer[5]['total_finish_tasks']; ?></div>
  </div>
</div>
<!-- /top tiles -->