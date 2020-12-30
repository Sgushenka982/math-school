$("#sendMail").on("click",function(){
	var pass = $("#passChange").val().trim();
	var pass_rep = $("#pass_rep").val().trim();

	 if(pass.length< 6){
		$("#passChange").trigger("reset");
		$("#errorMess").text("Введите Пароль не менее 6 символов");
		return false;	
	} else if(pass !== pass_rep){
		$("#passChange").trigger("reset");
		$("#pass_rep").trigger("reset");
		$("#errorMess").text("Пароль не совпадает");
		return false;	
	}
	$("#errorMess").text("");

		var hash = $.getUrlVar('hash');

	$.ajax({
		url:'validation/Changepass.php',
		type:'POST',
		сache:false,
		data:{'pass':pass, 'hash':hash},
		dataType:'html',
		beforeSend: function(){
			$("#sendMail").prop("disabled",true);
		},
		success:function(data){
			if(data)
				alert();
			else{
				window.location.href = "index.php";
			}
	
			$("#sendMail").prop("disabled",false);
		}
	});
	
});

