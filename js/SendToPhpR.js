$("#sendMail").on("click",function(){
	var email = $("#email").val().trim();
	var name = $("#name").val().trim();
	var surname = $("#surname").val().trim();
	var pass = $("#pass").val().trim();
	var pass_rep = $("#pass_rep").val().trim();

	if(email==""){
		$("#errorMess").text("Введите email");
		return false;
	} else if(!email.match(/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/)){
		$("#errorMess").text("Введите email правильно");
		return false;
	} else if(name.length< 2){
		$("#errorMess").text("Введите Имя ");
		return false;		
	} else if(surname.length< 2){
		$("#errorMess").text("Введите Фамилию ");
		return false;
	} else if(pass.length< 6){
		$("#pass").trigger("reset");
		$("#errorMess").text("Введите Пароль не менее 6 символов");
		return false;	
	} else if(pass !== pass_rep){
		$("#pass").trigger("reset");
		$("#pass_rep").trigger("reset");
		$("#errorMess").text("Пароль не совпадает");
		return false;	
	}

	$("#errorMess").text("");

	$.ajax({
		url:'validation/check.php',
		type:'POST',
		сache:false,
		data:{'email':email,'name':name,'surname':surname,'pass':pass},
		dataType:'html',
		beforeSend: function(){
			$("#sendMail").prop("disabled",true);
		},
		success:function(data){
			if(data)
				$("#errorMess").html(data);
			else{
				$("#mailForm").trigger("reset");
				$('.js-overlay-thank-you').fadeIn();

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
			}
			
			$("#sendMail").prop("disabled",false);
		}
	});

});