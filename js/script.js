

$(document).ready(function()
{

	$(function()
	{
		 $("#contact-form").validate(
		 {
		 	rules:{
		 		name:"required",
		 		email:"required"

		 	},
		 	messages:{
		 		name:"Please enter your name",
		 		email:"Please enter your email"
		 	}

		 });

	});

		$("#btn-contact-form").click(function()
		{	

			$("#contact-form").submit();
			return false;

		});

});