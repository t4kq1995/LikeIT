$(document).ready(function() {
	/*************** Globals ***************/
	var routing = {
		logout: 'controller/taskPage/logout.php',
		makeReady: 'controller/taskPage/makeReady.php',
		userList: 'controller/taskPage/userList.php',
		assignUser: 'controller/taskPage/assignUser.php',
		createOneTask: 'controller/taskPage/createOneTask.php',
		createXlsFile: 'controller/taskPage/createXlsFile.php'
	}

	var UPLOAD_FILE = '';

	/*************** Progress bar ***************/
	if ($(".progress .progress-bar")[0]) {
	    $('.progress .progress-bar').progressbar();
	}

	$(".select2_single").select2({
	  placeholder: "Select a user",
	  allowClear: true
	});

	/*************** Create notification ***************/
	var initNoty = function(text, type) {
		new PNotify({
          	title: 'Shared Future Notification',
          	text: text,
          	type: type,
          	styling: 'bootstrap3'
      	});
	}

	/*************** AJAX ***************/
	var sendQuery = function(url, data) {
		return $.ajax({
  			type: "POST",
  			url: url,
  			data: data
		});
	}

	var sendData = function(url, data) {
		return $.ajax({
			type: "POST",
			dataType: "json",
      		url: url,
      		data: data,
      		processData: false,
            contentType: false,
  		});
	}

	/*************** Logout ***************/
	$('#logout_button').click(function(event) {
		event.preventDefault();

		var logout = sendQuery(routing.logout, {});

		logout.success(function(data) {
			setTimeout(function() {
				window.location.reload();
			}, 1000);
		});

		logout.error(function(data) {
			throw 'We defined a server error - ' + data;
		});
	});

	/*************** Check is correct ***************/
	var isCorrect = function(data, text_success, text_error) {
		if (data.status) {
			initNoty(text_success, 'success');
			setTimeout(function(){
				window.location.reload();
			}, 1000);
		} else {
			initNoty(text_error, 'error');
		}
	}

	/*************** Make ready status ***************/
	$('.make_ready_button').click(function(event) {
		event.preventDefault();

		var current = $(this);
		var tr = $(this).parent().parent();
		var id_task = tr.data('id');

		console.log(id_task);

		var makeReady = sendQuery(routing.makeReady, {
			'id_task': id_task
		});

		makeReady.success(function(data) {
			if (data.status) {
				initNoty('Status task was changed', 'success');

				// Button changes
				var progres_td = tr.find('td.project_progress');
				$(progres_td).find('.progress-bar').data('transitiongoal', '100').css('width', '100%');
				$(progres_td).find('small').text('100% Complete');
				tr.find('.btn-info').removeClass('btn-info').addClass('btn-success').text('Ready');
				current.parent().empty().text('No available actions');
			} else {
				initNoty('Status task was not changed', 'error');
			}
		});

		makeReady.error(function(data) {
			throw 'We defined a server error - ' + data;
		});
	});

	/*************** Assigned task ***************/
	$('.select2_single').on('change', function(event) {
		if ($(this).val() != '') {
			var assing = sendQuery(routing.assignUser, {
				'id_user': $(this).val(),
				'id_task': $(this).parent().parent().data('id')
			});

			assing.success(function(data) {
				isCorrect(data, 'User was assgined', 'User was not assigned');
			});

			assing.error(function(data) {
				throw 'We defined a server error - ' + data;
			});
		}
	});

	/*************** Create task ***************/
	$('#create_task_button').click(function(event) {
		event.preventDefault();

		var task_name = $('#task_name').val();

		if (task_name != '') {
			var task_create = sendQuery(routing.createOneTask, {'task': task_name});

			task_create.success(function(data) {
				isCorrect(data, 'Task was created', 'Task was not created');
			});

			task_create.error(function(data) {
				throw 'We defined a server error - ' + data;
			});
		} else if (UPLOAD_FILE != '') {
			var formdata = new FormData();
			formdata.append('tasks', UPLOAD_FILE);

			var upload = sendData(routing.createXlsFile, formdata);

			upload.success(function(data) {
				isCorrect(data, 'Tasks were created', 'Tasks were not created');
			});

			upload.error(function(data) {
				throw 'We defined a server error - ' + data;
			});
		} else {
			initNoty('Please fill one field', 'error');
		}
	});

	/******** Change xls file ********/
	$('#tasks').on('change', function(event) {
		var file = this.files[0];
		UPLOAD_FILE = file;
	});
});