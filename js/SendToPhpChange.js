$("#sendMail").on("click",function(){
	var email = $("#emailCh").val().trim();

	if(email==""){
		$("#errorMess").text("Введите email");
		return false;
	} else if(!email.match(/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/)){
		$("#errorMess").text("Введите email правильно");
		return false;
	} 
	$("#errorMess").text("");

	$.ajax({
		url:'validation/sendToChange.php',
		type:'POST',
		сache:false,
		data:{'email':email},
		dataType:'html',
		beforeSend: function(){
			$("#sendMail").prop("disabled",true);
		},
		success:function(data){
			if(data)
				alert();
			else{
				 $("#mailForm").trigger("reset");
				$('.js-overlay-thank-you').fadeIn();
			}
	
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