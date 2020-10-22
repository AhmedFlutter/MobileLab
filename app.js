$(document).ready(function(){

	countNewMessages();

	setInterval(function () {
		countNewMessages();
	}, 3000);

	setInterval(function () {
		update_last_activity();
	}, 5000);

	function update_last_activity() {
		$.ajax({
			url: "livechat/update_last_activity.php",
			success: function () {

			}
		});
	}

	function countNewMessages() {
		$.ajax({
			url: "livechat/count_all_unseen_messages.php",
			method: "post",
			success: function (data) {
				var data2 = $('.count').html(data);
				if($('.count').html() == "" )
				{
					$('.count').css({
						"width" : "30px",
						"height" : "28px",
						"background-color": "yellow",
						"border":"2px solid black",
						"border-radius":"50%",
						"margin-top":"5px",
						"color":"black"
					}).hide();
				}
				else if(data2){
					$('.count').css({ "color":"yellow",
						"height":"28px",
						"width":"30px",
						"border":"2px solid black",
						"background-color":"yellow",
						"border-radius":"50%",
						"color":"black",
						"font-family":"arial",
						"font-size":"18px",
						"font-weight":"bold",
						"padding-left":"6px",
						"margin-top":"5px"}).show();
				}
			}
				
		});
		
	}
	
		



	$("#signup").click(function(){
		const firstname = $("#first").val();
		const username = $("#user").val();
		const email = $("#email").val();
		const password = $("#pass").val();
		const retypepass = $("#retypepass").val();
		if(firstname.length == ""){
			$(".fname").addClass("is-invalid");
		}else{
			$(".fname").removeClass("is-invalid");
		}

		if(username.length == ""){
			$(".uname").addClass("is-invalid");
		}else{
			$(".uname").removeClass("is-invalid");
		}

		if(email.length == ""){
			$(".email").addClass("is-invalid");
		}else{
			$(".email").removeClass("is-invalid");
		}

		if(password.length == ""){
			$(".pass").addClass("is-invalid");
		}else{
			$(".pass").removeClass("is-invalid");
		}

		if(retypepass.length == ""){
			$(".repass").addClass("is-invalid");
		}else{
			$(".repass").removeClass("is-invalid");
		}

		if(password !== retypepass){
			$(".pass").addClass("is-invalid");
			$(".passerror").html("Password not match");
			$(".repass").addClass("is-invalid");
			$(".conpass").html("Password not match");
		}

		if(firstname.length != "" && username.length != "" && email.length != "" && password.length != "" && retypepass.length !== ""){
			$.ajax({
				type:"POST",
				url :"signup_code.php",
				data:{"firstname":firstname,
					 "username":username,
					 "email":email,
					 "password":password,
					 "retypepass":retypepass},
				dataType: 'JSON',
				success : function(feedback){
						if(feedback.status === "error"){
							$(".email").addClass("is-invalid");
							$(".emailError").html(feedback.message);
						}
						else if(feedback.status === "email_validate_error"){
							$(".email").addClass("is-invalid");
							$(".emailError").html(feedback.message);
						}
						else if(feedback.status ===  "uerror"){
							$(".uname").addClass("is-invalid");
							$(".uerror").html(feedback.message);
						}
						else if(feedback.status ===  "euerror"){
							alert("This username and email is already taken ! Try Another");
						}
						else if(feedback.status ===  "success"){
							window.location = "login.php";
						}


					}
			});
		}
	});
});

	//login Code

	$(document).ready(function(){
	$("#login").click(function(){
		const username = $("#user").val();
		const userpassword = $("#userpass").val();

		if(username.length == ""){
			$(".user").addClass("is-invalid");
		}else{
			$(".user").removeClass("is-invalid");
		}

		if(userpassword.length == ""){
			$(".pass").addClass("is-invalid");
		}else{
			$(".pass").removeClass("is-invalid");
		}

		if(username.length != "" && userpassword.length != ""){
			$.ajax({
				type:"POST",
				url :"login_code.php",
				data:{"username":username,
					 "userpassword":userpassword},
				dataType: 'JSON',
				success : function(feedback){
						if(feedback.status === "success"){
							window.location = "userprofile1.php";
						}else if(feedback.status === "passwordError"){
							alert("email or password is incorrect");
						}else if(feedback.status === "emailError"){
							alert("email or password is incorrect");
						}


					}
			})
		}
	});
});

	$(document).ready(function(){
	$("#web_btn").click(function(){
		const username = $("#web_user").val();
		const email = $("#web_email").val();
		const message = $("#web_msg").val();

		if(username.length == ""){
			$(".name").addClass("is-invalid");
		}else{
			$(".name").removeClass("is-invalid");
		}

		if(email.length == ""){
			$(".email").addClass("is-invalid");
		}else{
			$(".email").removeClass("is-invalid");
		}

		if(message.length == ""){
			$(".message").addClass("is-invalid");
		}else{
			$(".message").removeClass("is-invalid");
		}

		if(username.length != "" && email.length != "" && message.length != ""){
			$.ajax({
				type:"POST",
				url :"web_contact.php",
				data:{"username":username,
					 "email":email,
					"message":message},
				dataType: 'json',
				success : function(feedback){
						if(feedback.status === "success"){
							alert("Your msg has been sent");
						}
						else if(feedback.status === "error"){
							alert("Your msg has not been sent");
						}




					}
			})
		}
	});
});

	$(document).ready(function(){
	$("#userbtn").click(function(){
		const username = $("#userform").val();
		const email = $("#emailform").val();
		const message = $("#messageform").val();

		if(message.length == ""){
			$(".message").addClass("is-invalid");
		}else{
			$(".message").removeClass("is-invalid");
		}

		if(username.length != "" && email.length != "" && message.length != ""){
			$.ajax({
				type:"POST",
				url :"usermsg.php",
				data:{"username":username,
					 "email":email,
					"message":message},
					async: false,
				dataType: 'json',
				success : function(feedback){
						if(feedback.status === "success"){
							alert("Your msg has been sent");
						}
						else if(feedback.status === "error"){
							alert("Your msg has not been sent");
						}




					}
			})
		}
	});
});





