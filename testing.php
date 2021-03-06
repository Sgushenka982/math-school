<?php 
ini_set("display_errors", 1);
error_reporting(-1);

require_once "blocks/connect_test.php";
require_once "php/function_test.php";

if( isset($_POST['test']) ){
	$test = (int)$_POST['test'];
	unset($_POST['test']);
	$result = get_correct_answers($test);
	if( !is_array($result) ) exit('Ошибка!');
	// данные теста
	$test_all_data = get_test_data($test);
	// 1 - массив вопрос/ответы, 2 - правильные ответы, 3 - ответы пользователя
	$test_all_data_result = get_test_data_result($test_all_data, $result, $_POST);
	// print_r($_POST);
	// print_r($result);
	// print_arr($test_all_data_result);
	echo print_result($test_all_data_result);
	die;
}

// список тестиров
$tests = get_tests();

if( isset($_GET['test']) ){
	$test_id = (int)$_GET['test'];
	$test_data = get_test_data($test_id);
	if( is_array($test_data) ){
		$count_questions = count($test_data);
		$pagination = pagination($count_questions, $test_data);
		}
	}
 ?>
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

	<div class="wrap">
		<?php if( $tests ): ?>
		<h3>Варианты тестов</h3>
		<?php foreach($tests as $test): ?>
			<p><a href="?test=<?=$test['id']?>"><?=$test['test_name']?></a></p>
		<?php endforeach; ?>

		<br><hr><br>
		<div class="content">
			<p>Всего вопросов: <?=$count_questions?></p>
			<?=$pagination?>
			<span class="none" id="test-id"><?=$test_id?></span>
			<?php if( isset($test_data) ): ?>
			<div class="test-data">
				<?php foreach($test_data as $id_question => $item): // получаем каждый конкретный вопрос + ответы ?>
					<div class="question" data-id="<?=$id_question?>" id="question-<?=$id_question?>">
						<?php foreach($item as $id_answer => $answer): // проходимся по массиву вопрос/ответы ?>
							<?php if( !$id_answer ): // выводим вопрос ?>
								<p class="q"><?=$answer?></p>
							<?php else: // выводим варианты ответов ?>
								<p class="a">
								<input type="radio" id="answer-<?=$id_answer?>" name="question-<?=$id_question?>" value="<?=$id_answer?>">
								<label for="answer-<?=$id_answer?>"><?=$answer?></label>
								</p>
							<?php endif; // $id_answer ?>
						<?php endforeach; // $item ?>
					</div> <!-- .question -->
				<?php endforeach; // $test_data ?>
			</div><!-- .test-data -->
				<div class="buttons">
					<button class="center baton" id="btn">Закончить тест</button>
				</div>
			<?php else: // isset($test_data) ?>
			Выберите тест
			<?php endif; // isset($test_data) ?>
		</div><!-- .content -->
		<?php else: // $tests ?>
		<h3>Нет тестов</h3>
		<?php endif; // $tests ?>
</div> <!-- .wrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script  src="js/test.js"></script>
</body>
</html>