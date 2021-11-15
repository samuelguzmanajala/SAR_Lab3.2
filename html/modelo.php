<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/form.css">
	<link rel="stylesheet" href="../css/header.css">
	<>

</head>

<body>
	<div class=header__all>
		<div class="header__container">
			<header class=header>
				<H1>Libro de visitas</H1>
			</header>
		</div>
	</div>
	<div class="form__div">
		<form class="form"  action="../php/AddBook.php" method="post"
		id="form">
		<h1 class="form__title">Libro de visitas</h1>
		<label for="" class="form__link">UserName</label>
		<input type="text" name="userName" id="userName" class="form__input">
		<label for="emailInput" class="form__link">email</label>
		<input type="text" name="emailInput" id="emailInput" class="form__input">
		<label for="publicInput" class="form__link">publica</label>
		<input type="checkbox" name="publicInput" id="publicInput" class="form__input" value="publica" >
		<label for="comentarioInput" class="form__link">comentario: </label>
		<textarea name="comentarioInput" id="comentarioInput" cols="30" rows="10" class="form__input__textArea"></textarea>
		<button type="submit" class="form__submit" onclick="validacion()">enviar formulario</button>
		</form>
	</div>
	<div class="button__div">
		
	</div>

	</div>
	<div class="response" id="response"></div>
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/validation.js"></script>
	<script src="../js/readBooks.js"></script>
	<script src="../js/showBooks.js"></script>
</body>

</html>