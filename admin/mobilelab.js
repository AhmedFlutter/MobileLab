//main document open
$(document).ready(function(){
	viewNotification();
	countNewMessages();

	var main = function() {
    $('.notification img').click(function() {
      $('.notification-menu').toggle();
    });

    $('.post .btn').click(function() {
      $(this).toggleClass('btn-like');
    });
  };
  $(document).ready(main);

  $('.notification-btn').on('click',function(){

	$.ajax({
		url: "notification_view_btn.php",
		method : "post",
		success: function(data) {
				$(".notification-menu").html(data);
		}
	});  	
  	
  });



	setInterval(function () {
		countNewMessages();
		viewNotification();
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

	function viewNotification() {
		$.ajax({
			url: "notification_view.php",
			method: "post",
			success: function(data) {
				var data2 = $('.notifcation-count').html(data);
				if($('.notifcation-count').html() == "" )
				{
					$('.notifcation-count').css({
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
					$('.notifcation-count').css({ "color":"yellow",
						"height":"30px",
						"width":"30px",
						"border":"2px solid black",
						"background-color":"yellow",
						"border-radius":"50%",
						"color":"black",
						"font-family":"arial",
						"font-size":"18px",
						"font-weight":"bold",
						"padding":"5px",
						"margin-top":"5px"}).show();
				}
			}
		});
	}

	function countNewMessages()
	{
		$.ajax({
			url: "livechat/count_all_unseen_messages.php",
			method: "post",
			success: function(data)
			{
				$('.count').html(data);
			}
		});
	}
			//data tables

        $('.example').DataTable();


			// Admin slide Nav
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});


	  // update Company Code

	  $(document).on('click','.btn_update_company',function(){
				$('#myModal').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function(){
		  return $(this).text();

	  }).get();

		$('#comp_id').val(data[0]);
		$('#company_name').val(data[1]);

	});





	  $('#updatedata').click(function(){

		var comp_id = $('#comp_id').val();
		var company_name = $('#company_name').val();

		if(company_name.length == ""){
		  $(".company").addClass("is-invalid");
		}
		else{
		  $(".company").removeClass("is-invalid");
		}

		if(company_name.length != ""){
		  $.ajax({
			type:"POST",
			url :"update_company.php",
			data:{"comp_id":comp_id,
			  "company_name":company_name},
			dataType: 'JSON',
			success : function(feedback){
				if(feedback.status === "success"){
				  alert("Data Updated");
				  window.location = "add_company.php";
				}
				else if(feedback.status === "error"){
				  alert("Data Not Updated")
				}


			  }
		  })
		}
	  });

	   // update Problem Code

	   $(document).on('click','.btn_update_problem',function(){
		$('#myModal').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function(){
		  return $(this).text();

	  }).get();
		console.log(data);

		$('.repairid').val(data[0]);
		$('.problem1').val(data[1]);
		$('.amount1').val(data[2]);
	  });




	  $(document).on('click','.update_data_problem',function(){
		var prob_update_id = $('.repairid').val();
		var prob_name = $('.problem1').val();
		var prob_amount = $('.amount1').val();

		if(prob_name.length == ""){
		  $(".prob").addClass("is-invalid");
		}
		else{
		  $(".prob").removeClass("is-invalid");
		}

		if(prob_amount.length == ""){
		  $(".amo").addClass("is-invalid");
		}
		else{
		  $(".amo").removeClass("is-invalid");
		}

		if(prob_name.length != "" && prob_amount.length != ""){
		  $.ajax({
			type:"POST",
			url :"update_problem.php",
			data:{"prob_update_id":prob_update_id,
			  "prob_name":prob_name,
			  "prob_amount":prob_amount},
			dataType: 'JSON',
			success : function(feedback){
				if(feedback.status === "success1"){
				  alert("Data Updated");
				  window.location = "add_problem.php";
				}
				 else if(feedback.status === "error1"){
				   alert("Data Not Updated")
				}


			  }
		  })
		}
		});

		//company deleted code

	$(document).on('click','.btn_delete_company',function(){
			$('.myModaldelete').modal('show');

	$tr = $(this).closest('tr');

	var data = $tr.children("td").map(function(){
	  return $(this).text();

  	}).get();
	console.log(data);
		$('.delete_comp_id').val(data[0]);

	});

	$('#deletedata').click(function(){

		var comp_id = $('.delete_comp_id').val();


		if(comp_id.length != ""){
		$.ajax({
			type:"POST",
			url :"delete_company.php",
			data:{"comp_id":comp_id},
			dataType: 'JSON',
			success : function(feedback){
				if(feedback.status === "success"){
				alert("Data Deleted");
				window.location = "add_company.php";
				}
				else if(feedback.status === "error"){
				alert("Data Not Deleted ")
				}


			}
		})
		}
  });

	  //delete problem
	  $(document).on('click','.btn_delete_problem',function(){
		$('.myModal_delete_prob').modal('show');

$tr = $(this).closest('tr');

var data = $tr.children("td").map(function(){
  return $(this).text();

  }).get();
console.log(data);
	$('.repairid').val(data[0]);

});

$('.delete_data_problem').click(function(){

	var prob_id = $('.repairid').val();


	if(prob_id.length != ""){
	$.ajax({
		type:"POST",
		url :"delete_prob.php",
		data:{"prob_id":prob_id},
		dataType: 'JSON',
		success : function(feedback){
			if(feedback.status === "success"){
			alert("Data Deleted");
			window.location = "add_problem.php";
			}
			else if(feedback.status === "error"){
			alert("Data Not Deleted ")
			}


		}
	})
	}
});




//main document ready close
});
