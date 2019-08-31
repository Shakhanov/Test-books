<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Добавление книги</title>

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
</head>
<body class="d-flex flex-column h-100" data-gr-c-s-loaded="true">
	<!-- Begin page content -->
	<main role="main" class="flex-shrink-0">
		<div class="container">
		<h1 class="mt-5">Добавление новой книги</h1>
		<a href="booksList.php">	&#8592;  Назад, к списку книг </a>
			<form id="createBook" method="POST" action="addBookValidation.php">
				<label for="bookName">Название книги</label>
				<input class="form-control" type="text" name="bookName" id="bookName" placeholder="'Красная шапочка'" maxlength="200">
				<br>

				<label for="postDate">Дата добавления</label>
				<input class="form-control" type="date" name="postDate" id="postDate">
				<br>

				<label for="description">Краткое описание книги</label>
				<textarea name="description" id="description" class="form-control" placeholder="Рассказ начинается с боя..." rows="3" maxlength="200"></textarea>
				<br>

				<label for="pages">Количество страниц</label>
				<input class="form-control" type="number" name="pages" id="pages" maxlength="50" min="0">
				<br>

				<label for="price">Цена</label>
				<input class="form-control" type="number" name="price" id="price" maxlength="50" min="0">
				<br>

                <input class="btn btn-primary btn-lg" id="addBook" name="addBook" type="submit" value="Добавить книгу">
			</form>
		</div>
	</main>

	<footer class="footer mt-auto py-3">
		<div class="container">
			<span class="text-muted"></span>
		</div>
	</footer>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script>

		var date = document.getElementById('postDate');
		var dateObj = new Date();
		date.value = dateObj.toISOString().slice(0,10)

		$("form").submit(function(event) {
			event.preventDefault();

			var bookName = $('input#bookName').val();
			var postDate = $('#postDate').val();
			var description = $('#description').val();
			var pages = $('input#pages').val();
			var price = $('input#price').val();
			var flag = 0;

			//$('input#bookName').focusout("is-invalid");

				if (bookName == '') { 
					$('input#bookName').addClass("is-invalid");
				} else {
					$('input#bookName').removeClass("is-invalid").addClass("is-valid");
				}

				if (postDate == '') { 
					$('#postDate').addClass("is-invalid");
				} else {
					$('#postDate').removeClass("is-invalid").addClass("is-valid");
				}

				if (description == '') { 
					$('#description').addClass("is-invalid");
				} else {
					$('#description').removeClass("is-invalid").addClass("is-valid");
				}

				if (pages == '') { 
					$('input#pages').addClass("is-invalid");	
				} else {
					$('input#pages').removeClass("is-invalid").addClass("is-valid");
				}

				if (price == '') { 
					$('input#price').addClass("is-invalid");
				} else {
					$('input#price').removeClass("is-invalid").addClass("is-valid");
				}

				if ((bookName !== '') && (postDate !== '') && (description !== '') && (pages !== '') && (price !== '')) {
					$("form").unbind('submit').submit();
				}
		});
		</script>

</body>

