<div class="row">
  <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">

      <div class="x_title">
        <h2>Task Form <small>make new tasks (select one of two variants)</small></h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <br />
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="task_name">Task Name</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="task_name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="ln_solid"></div>
           <div class="form-group">
            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="tasks">File with tasks (xls)</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="file" id="tasks" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <button id="create_task_button" type="submit" class="btn btn-success">Create task</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>