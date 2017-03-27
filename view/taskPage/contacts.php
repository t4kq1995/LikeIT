<div class="row">
  <div class="col-md-12">
    <div class="x_panel">

      <div class="x_title">
        <h2>Team</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <h4>Meet our team</h4>
          </div>
          <div class="clearfix"></div>
          <?php
            require_once('controller/taskPage/teamList.php');

            $access = array('3' => 'Leader', '2' => 'Team Leader', '1' => 'Programmer');

            while($data = mysqli_fetch_assoc($result)) {
              echo '<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                      <div class="well profile_view">
                        <div class="col-sm-12">
                          <h4 class="brief"><i>'.$access[$data['access']].'</i></h4>
                          <div class="left col-xs-7">
                            <h2>'.$data['username'].'</h2>
                            <ul class="list-unstyled">
                              <li><i class="fa fa-envelope"></i> Email: '.$data['email'].'</li>
                            </ul>
                          </div>
                          <div class="right col-xs-5 text-center">
                            <img src="assets/default/images/'.$data['img'].'" alt="" class="img-circle img-responsive img-contact">
                          </div>
                        </div>
                        <div class="col-xs-12 bottom text-center">
                          <div class="col-xs-12 col-sm-6 emphasis">
                            <p class="ratings">
                              <a>5.0</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>';
            }

          ?>

        </div>
      </div>
    </div>
  </div>
</div>