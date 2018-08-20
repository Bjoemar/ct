$('#sign_in').click(() => {

	if($('#u_name').val().length == 0 && $('#u_pass').val().length == 0) {
		$('#error_msg').html('<small>* Something Wrong in username or password</small>');
		$('#error_msg').css('color','red').css('font-size' , '13px');
	} else {
		$('#log_form').submit();
	}


})


$('#reg_btn').click(() => {
		error_flag = false;

	const reg_user_name = $('#username').val();


	if($('#username').val().length == 0) {
		$('#username').next().html('* This Field is required')
		$('#username').next().css('color' , 'red')
		$('#username').css('background','#FAA29C')
		error_flag = true;
	} else {
	$.ajax({
 		url: "controllers/authenticate_endpoint.php",
 		method : "post",
 		data : { reg_username : reg_user_name },

 	}).done(data => {
 		if(data == 'match') {
	 		$('#username').next().html('* Username is already exist')
			$('#username').next().css('color' , 'red')
			$('#username').css('background','#FAA29C')
			error_flag = true;
 		} else {
 			$('#username').next().html('* Username is available')
			$('#username').next().css('color' , 'green')
			$('#username').css('background','white')
 		}
 	})
	}

	if($('#password').val().length == 0) {
		$('#password').next().html('* This Field is required')
		$('#password').next().css('color' , 'red')
		$('#password').css('background','#FAA29C')
		error_flag = true;
	} else {
		$('#password').next().html('')
		$('#password').css('background','white')
		
	}



	if($('#email').val().length == 0) {
		$('#email').next().html('* This Field is required')
		$('#email').next().css('color' , 'red')
		$('#email').css('background','#FAA29C')
		error_flag = true;
	} else {
		$('#email').next().html('')
		$('#email').css('background','white')
	}

	if($('#firstname').val().length == 0) {
		$('#firstname').next().html('* This Field is required')
		$('#firstname').next().css('color' , 'red')
		$('#firstname').css('background','#FAA29C')
		error_flag = true;
	} else {
		$('#firstname').next().html('')
		$('#firstname').css('background','white')
	}


	if($('#middlename').val().length == 0) {
		$('#middlename').next().html('* This Field is required')
		$('#middlename').next().css('color' , 'red')
		$('#middlename').css('background','#FAA29C')
		error_flag = true;
	} else {
		$('#middlename').next().html('')
		$('#middlename').css('background','white')
	}

	if($('#lastname').val().length == 0) {
		$('#lastname').next().html('* This Field is required')
		$('#lastname').next().css('color' , 'red')
		$('#lastname').css('background','#FAA29C')
		error_flag = true;
	} else {
		$('#lastname').next().html('')
		$('#lastname').css('background','white')
	}

	if($('#address').val().length == 0) {
		$('#address').next().html('* This Field is required')
		$('#address').next().css('color' , 'red')
		$('#address').css('background','#FAA29C')
		error_flag = true;
	} else {
		$('#address').next().html('')
		$('#address').css('background','white')
	}

	if($('#number').val().length == 0) {
		$('#number').next().html('* This Field is required')
		$('#number').next().css('color' , 'red')
		$('#number').css('background','#FAA29C')
		error_flag = true;
	} else {
		$('#number').next().html('')
		$('#number').css('background','white')
	}

	if(error_flag == false) {
		$('#reg_form').submit();
	}

})













