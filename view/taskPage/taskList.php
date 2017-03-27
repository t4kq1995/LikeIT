<div class="row">
  <div class="col-md-12">
    <div class="x_panel">

      <div class="x_title">
        <h2>Task List</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <p>Task manager for creative team</p>
        <!-- start project list -->
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">№</th>
              <th style="width: 20%">Task Name</th>
              <th>Assigned To</th>
              <th>Task Progress</th>
              <th>Status</th>
              <th style="width: 20%">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require_once('controller/taskPage/taskList.php');
              require_once('controller/taskPage/userList.php');

              $select = '<select class="select2_single form-control col-md-3 col-sm-3 col-xs-6" tabindex="-1"><option></option>';

              foreach ($user_list as $key => $value) {
                  $select .= '<option value="'.$value['id_user'].'">'.$value['username'].'</option>';
              }

              $select .= '</select>';

              $index = 1;
              while($data = mysqli_fetch_assoc($result)) {

                if ($data['status'] == 0) {
                  $class = 'btn-info';
                  $name_button = 'In proccess';
                  $complete = 0;
                  $show_button = true;
                } else {
                  $class = 'btn-success';
                  $name_button = 'Ready';
                  $complete = 100;
                  $show_button = false;
                }

                echo '<tr data-id="'.$data['id_task'].'">
                        <td>'.$index.'</td>
                        <td>
                          <a>'.$data['name_task'].'</a>
                          <br />
                          <small>Created '.$data['date_creation'].'</small>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                              <img src="assets/default/images/'.$data['img'].'" class="avatar" alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$complete.'"></div>
                          </div>
                          <small>'.$complete.'% Complete</small>
                        </td>
                        <td>
                          <button type="button" class="btn '.$class.' btn-xs">'.$name_button.'</button>
                        </td>
                        <td>';
                        if ($show_button) {
                          echo '<a href="#" class="btn btn-primary btn-xs make_ready_button"><i class="fa fa-location-arrow"></i> Make ready </a>';
                          if ($_SESSION['shared_future']['access'] == 2) {
                            echo $select;
                          }
                        } else {
                          echo 'No available actions';
                        }
                        echo '
                        </td>
                      </tr>';
                  $index++;
              }
            ?>
          </tbody>
        </table>
        <!-- end project list -->

      </div>
    </div>
  </div>
</div>