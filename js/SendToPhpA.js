$("#sendMail").on("click",function(){
	var email = $("#email").val().trim();
	var pass = $("#passA").val().trim();

	if(email==""){
		$("#errorMess").text("Введите email");
		return false;
	} else if(!email.match(/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/)){
		$("#errorMess").text("Введите email правильно");
		return false;
	} else if(pass.length< 6){
		$("#passA").trigger("reset");
		$("#errorMess").text("Введите Пароль не менее 6 символов");
		return false;	
	}
	$("#errorMess").text("");

	$.ajax({
		url:'validation/auth.php',
		type:'POST',
		сache:false,
		data:{'email':email,'pass':pass},
		dataType:'html',
		beforeSend: function(){
			$("#sendMail").prop("disabled",true);
		},
		success:function(data){
			if(data){
				$('.js-overlay-thank-you').fadeIn();
				$("#mailForm").trigger("reset");}
			else
				 window.location.href = "index.php";
	
			$("#sendMail").prop("disabled",false);
		}
	});
	// Закрыть попап «спасибо»
	$('.js-close-thank-you').click(function() { // по клику на крестик
		$('.js-overlay-thank-you').fadeOut();
	});

	$(document).mouseup(function (e) { // по клику вне попапа
	    var popup = $('.popup');
	    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
	        $('.js-overlay-thank-you').fadeOut();
	    }
	});
});