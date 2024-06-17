$(document).ready(function() {

	$(document).on('click','.del_product_btn', function(e){
		e.preventDefault();

		var id = $(this).val();

		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					method: "POST",
					url: "functions/code.php",
					data: {
						'product_id':id,
						'del_product_btn':true
					},
					success: function(response){
						if(response == 200)
						{
							swal("success!", "Product Deleted Successfully!!", "success");
							$("#products_table").load(location.href + " #products_table");
						}
						else if(response == 500)
						{
							swal("Error!", "Something Went Wrong!!", "error");
						}
					}
				});
			}
		});

	});

	$(document).on('click','.del_cat_btn', function(e){
		e.preventDefault();

		var id = $(this).val();

		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					method: "POST",
					url: "functions/code.php",
					data: {
						'category_id':id,
						'del_cat_btn':true
					},
					success: function(response){
						if(response == 200)
						{
							swal("success!", "Category Deleted Successfully!!", "success");
							$("#category_table").load(location.href + " #category_table");
						}
						else if(response == 500)
						{
							swal("Error!", "Something Went Wrong!!", "error");
						}
					}
				});
			}
		});
	});


	$(document).on('click','.message_del', function(e){
		e.preventDefault();

		var id = $(this).val();

		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					method: "POST",
					url: "functions/code.php",
					data: {
						'id':id,
						'message_del':true
					},
					success: function(response){
						if(response == 200)
						{
							swal("success!", "Message Deleted Successfully!!", "success");
							$("#message_table").load(location.href + " #message_table");
						}
						else if(response == 500)
						{
							swal("Error!", "Something Went Wrong!!", "error");
						}
					}
				});
			}
		});
	}); 


	$(document).on('click','.user_del', function(e) {
		e.preventDefault();

		var id = $(this).val();

		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					method: "POST",
					url: "functions/code.php",
					data: {
						'id':id,
						'user_del':true
					},
					success: function(response){
						if(response == 200)
						{
							swal("success!", "User Deleted Successfully!!", "success");
							$("#user_table").load(location.href + " #user_table");
						}
						else if(response == 500)
						{
							swal("Error!", "Something Went Wrong!!", "error");
						}
					}
				});
			}
		});
	});	
});		