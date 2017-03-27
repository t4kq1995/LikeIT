$(document).ready(function() {
	/*************** Globals ***************/
	var routing = {
		login: 'controller/mainPage/login.php',
		signup: 'controller/mainPage/signup.php'
	};

	/*************** AJAX ***************/
	var sendQuery = function(url, data) {
		return $.ajax({
  			type: "POST",
  			url: url,
  			data: data
		});
	}

	/*************** Create notification ***************/
	var initNoty = function(text, type) {
		new PNotify({
          	title: 'Shared Future Notification',
          	text: text,
          	type: type,
          	styling: 'bootstrap3'
      	});
	}

	/*************** Check correct server answer ***************/
	var isServerCorrect = function(data) {
		if (data.status) {
			initNoty('Welcome to Task Manager.', 'success');
			setTimeout(function(){
				window.location.reload();
			}, 2000);
		} else {
			initNoty('We recognize error. Please check your data.', 'error');
		}
	}

	/*************** Login button ***************/
	$('#login_button').click(function(event) {
		// Prevent default event of button
		event.preventDefault();

		// Collect data from inputs
		var username = $('#username_login').val();
		var password = $('#password_login').val();

		// Check for input
		if (username != '' && password != '') {
			// Send request to server side
			var login = sendQuery(routing.login, {
				'username': username,
				'password': password
			});

			login.success(function(data) {
				isServerCorrect(data);
			});

			login.error(function(data) {
				throw 'We defined a server error - ' + data;
			})
		} else {
			initNoty('Please fill all fields.', 'info');
		}
	});

	/*************** Signup button ***************/
	$('#signup_button').click(function(event) {
		// Prevent default event of button
		event.preventDefault();

		// Collect data from inputs
		var username = $('#username_signup').val();
		var password = $('#password_signup').val();
		var email = $('#email_signup').val();

		// Check for input
		if (username != '' && password != '' && email != '') {
			// Send request to server side
			var signup = sendQuery(routing.signup, {
				'username': username,
				'password': password,
				'email': email
			});

			signup.success(function(data) {
				isServerCorrect(data);
			});

			signup.error(function(data) {
				throw 'We defined a server error - ' + data;
			})
		}
	});
});