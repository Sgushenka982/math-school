<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Дипломчик</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <main>
    	<div id="QuadraEqua" class="text-center">  
    		<p class="quadratic"><i style="color: red;">a</i>x<sup>2</sup>&nbsp;+&nbsp;<i style="color: blue;">b</i>x&nbsp;+&nbsp;<i style="color: yellow;">c</i>&nbsp;=&nbsp;0</p>
    		<form id="inputPar" class="inputPar">
				<p><i style="color: red;">a:</i></p>
    			<input id="parA" type="text" name="parA" class="form-contrl quadraSize">
    			<p><i style="color: blue;">b:</i></p>
    			<input id="parB" type="text" name="parB" class="form-contrl quadraSize">
    			<p><i style="color: yellow;">c:</i></p>
    			<input id="parC" type="text" name="parC" class="form-contrl quadraSize">
    			<button id="SendPar" class="btn btn-primary btn-block nextTurn" type="button">Далее</button>
    			<div id="errorMess"></div>
    		</form>
  			<div id="equation">
  				<p><span id="a"></span>x<sup>2</sup><span id="b">&nbsp;</span>x<span id="c">&nbsp;</span>&nbsp;=&nbsp;0</p>
  			</div>
    		<p id="Dtext">Для нахождения корней квадратного уравнения требуется сперва найти Дискриминант</p>
            <div class="f-a">
    		<form class="Dformula Quadra">
    			<p><i >D&nbsp;=</i></p>
    			<input type="text" class="form-contrl quadraSize" name="Discriminant" id="DiscriminantF" placeholder="Формула">
    			<button id="SendDformula" class="btn btn-primary btn-block nextTurn" type="button">Далее</button>
    		</form>
        </div>
        <div class="s-a">
    		<form class="Dsolving Quadra">
    			<p><i >D&nbsp;=&nbsp;</i></p>
    			<input type="text" class="form-contrl quadraSize" name="FirstDsolveInp" id="FirstDsolveInp"><p>&nbsp;=&nbsp;</p><input type="text" class="form-contrl quadraSize" name="SecondDsolveInp" id="SecondDsolveInp"><p>&nbsp;=&nbsp;</p> <input type="text" class="form-contrl quadraSize" name="LastDsolveInp" id="LastDsolveInp">
    			<button id="SendDSolving" class="btn btn-primary btn-block nextTurn" type="button">Далее</button>
    		</form>
            </div>
            <div class="t-a">
    		<form class="Droots Quadra">
    			<p><i>D</i> <span id="ineq"></span> 0, следовательно количество корней уравнения равно </p>
    			<input type="text" class="form-contrl quadraSize" name="HowmanyRoots" id="HowmanyRoots">
    			<button id="Droots" class="btn btn-primary btn-block nextTurn" type="button">Далее</button>
    		</form>
            </div>
            <div class="fo-a">
    		<form class="FormulaRoot Quadra">
    			<p class="break">Корни уравнения находятся по формуле:</p>
    			<p><i >x</i><sub>1,2</sub>&nbsp;=&nbsp;</p>
    			<input type="text" class="form-contrl quadraSize" name="RootsForm" id="RootsForm">
    			<button id="SendRootform" class="btn btn-primary btn-block nextTurn" type="button">Далее</button>
    		</form>
            </div>
            <div class="fi-a">
    		<form class="FRoot Quadra">
				<p class="break">Найдем корни для нашего уравнения:</p>
				<p><i >x</i><sub>1</sub>&nbsp;=&nbsp;</p>
				<input type="text" class="form-contrl quadraSize RootFind" name="FirstRoot" id="FirstRoot">
				<button id="SendFirstRoot" class="btn btn-primary btn-block nextTurn" type="button">Далее</button>
			</form>
            </div>
            <div class="six-a">
			<form class="SecRoot Quadra">
				<p><i >x</i><sub>2</sub>&nbsp;=&nbsp;</p>
				<input type="text" class="form-contrl quadraSize RootFind" name="SecondRoot" id="SecondRoot">
    			<button class="btn btn-primary btn-block nextTurn" id="SendSecondRoot">Готово</button>
    		</form>
            </div>
    	</div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/SolveQuadra.js"></script>
</body> 
</html>
