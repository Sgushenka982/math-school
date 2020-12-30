$("#SendPar").on("click",function(){
	window.a = $("#parA").val().trim();
	window.b = $("#parB").val().trim();
	window.c = $("#parC").val().trim();

	if(a ==""){
		$("#errorMess").text("Введите a");
		return false;
	}else if(a =="0"){
		$("#errorMess").text("Если параметр а=0, то уравнение является линейным");
		return false;
	}else if(b ==""){
		$("#errorMess").text("Введите b");
		return false;
	}else if(b =="0"){
		$("#errorMess").text("Если параметр b=0, то уравнение является неполным");
		return false;
	}else if(c ==""){
		$("#errorMess").text("Введите c");
		return false;
	}else if(c =="0"){
		$("#errorMess").text("Если параметр c=0, то уравнение является неполным");
		return false;
	}
	$("#errorMess").text("");
	if(a<0){
		$('#a').html(a);
	}/*else if(a=1){
		$('#a').html("");
	}
	else if(a=-1){
		$('#a').html("-&nbsp;");
	}*/
	else{
		$('#a').html("+"+a);
	}
$('#a').html(a);
if(b<0){
		$('#b').html(" "+b);
	}/*else if(b=1){
		$('#b').html("&nbsp;+&nbsp;");
	}else if(b=-1){
		$('#b').html("&nbsp;-&nbsp;");
	}*/else{
		$('#b').html(" + "+b);
	}
if(c<0){
		$('#c').html(" "+c);
	}else{
		$('#c').html(" + "+c);
	}
	$('#equation').fadeIn();
	$('#Dtext').fadeIn();
	$('.f-a').fadeIn();

});

$("#SendDformula").on("click",function(){
var DisF = $("#DiscriminantF").val().trim();
var DisFormula ="b^2-4*a*c";//должна быть строка
var i =0;

if(DisF!=DisFormula){
	$("#DiscriminantF").trigger("reset");
	alert("У вас ошибка, правильная формула: "+DisFormula+"");
	/*for(i;i<DisF.length;i++){
		if(DisF[i]!=DisFormula[i]){
			alert(DisF[i]);		
		}
	}*/
}else {
	alert("Тут все правильно, идем дальше");
	$('.s-a').fadeIn();
}
});

$("#SendDSolving").on("click",function(){
	var First = $("#FirstDsolveInp").val().trim();
	var Second = $("#SecondDsolveInp").val().trim();
	var Last = $("#LastDsolveInp").val().trim();

	var FirstCheck = ""+b+"^2-4*"+a+"*"+c+"";//должны быть подставленны переменные
	var SCh1 = Math.pow(b,2);
	var SCh2 =4*a*c;
	var SecondCheck = ""+SCh1+"-"+SCh2+""; //скобки должны быть посчитаны
	window.LastCheck = SCh1-SCh2;// должно быть посчитанно полностью

	if(First!=FirstCheck){
		$("#FirstDsolveInp").trigger("reset");
		$("#FirstDsolveInp").css('font-color','red');
		alert("У вас ошибка, правильно будет: "+FirstCheck+"");
	}else if(Second!=SecondCheck){
		$("#SecondDsolveInp").trigger("reset");
		$("#SecondDsolveInp").css('font-color','red');
		alert("У вас ошибка, правильно будет: "+SecondCheck+"");
	}else if(Last!=LastCheck){
		$("#LastDsolveInp").trigger("reset");
		$("#LastDsolveInp").css('font-color','red');
		alert("У вас ошибка, правильно будет: "+LastCheck+"");
	}else{
		alert("Тут все правильно, идем дальше");
		$('.t-a').fadeIn();
	}
	if(LastCheck>0){
		$("#ineq").html(' > ');
	}else if(LastCheck==0){
		$("#ineq").html(' = ');
	}else if(LastCheck<0){
		$("#ineq").html(' < ');;
	}
});

$("#Droots").on("click",function(){
	var Droots = $("#HowmanyRoots").val().trim();

	if(LastCheck>0){
		RootsCheck=2;
	}else if(LastCheck==0){
		RootsCheck=1;
	}else if(LastCheck<0){
		RootsCheck=0;
	}
	if(Droots!=RootsCheck){
		alert("неправильное количество корней");
	}else if(RootsCheck=0){
		alert("Уравнение не имеет корней");
	}else if(RootsCheck=1){
		alert("Тут все правильно, идем дальше");
		$('.fo-a').fadeIn();

		$("#SendRootform").on("click",function(){
		var RootsFormula = $("#RootsForm").val().trim();
		var RootsFormulaCheck ="-b/(2*a)";
	
		if(RootsFormula!=RootsFormulaCheck){//посимвольные проверки
			alert("У вас ошибка, правильная формула:-b/(2*a)");
		}else{
			alert("Тут все правильно, идем дальше");
			$('.fi-a').fadeIn();
		}
		});
		$("#SendFirstRoot").on("click",function(){
			var FirstRoot = $("#FirstRoot").val().trim();
			var RootCheck =-b/(2*a);
		
			if(FirstRoot!=RootCheck){//посимвольные проверки
				alert("У вас ошибка, правильно будет:"+-b+"/(2*"+a+")");
			}else{
				alert("Молодец, уравнение решено!");
			}
		
		});
		
	
	}else if(RootsCheck=2){
		alert("Тут все правильно, идем дальше");
		$('.fo-a').fadeIn();

		$("#SendRootform").on("click",function(){
		var RootsFormula = $("#RootsForm").val().trim();
		var RootsFormulaCheck ="(-b±sqrt(D))/(2*a)";

		if(RootsFormula!=RootsFormulaCheck){//посимвольные проверки
			alert("У вас ошибка, правильная формула:(-b±sqrt(D))/(2*a)");
		}else{
			alert("Тут все правильно, идем дальше");
			$('.fi-a').fadeIn();
		}
		});

		$("#SendFirstRoot").on("click",function(){
			var FirstRoot = $("#FirstRoot").val().trim();
			window.RootCheck1 =(-b+Math.sqrt(LastCheck))/(2*a);
			window.RootCheck2 =(-b-Math.sqrt(LastCheck))/(2*a);
		
			if(FirstRoot!=RootCheck1 || FirstRoot!=RootCheck2){//посимвольные проверки
				alert("У вас ошибка, правильно будет:(-"+b+"±sqrt("+LastCheck+"))/(2*"+a+")");
			}else{
				alert("Тут все правильно, идем дальше");
				$('.six-a').fadeIn();
			}
		
		});
		
		$("#SendSecondRoot").on("click",function(){
			var SecondRoot = $("#SecondRoot").val().trim();
		
			if(SecondRoot!=RootCheck1 || SecondRoot!=RootCheck2){//посимвольные проверки
				alert("У вас ошибка, правильно будет:(-"+b+"±sqrt("+LastCheck+"))/(2*"+a+")");
			}else{
				alert("Молодец, уравнение решено!");
				
			}
		
		});


	}
});



