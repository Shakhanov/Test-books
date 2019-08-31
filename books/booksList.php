<?php 

require_once('selectBooks.php');

?>


<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Список книг</title>

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

<body>
	
	<main role="main" class="flex-shrink-0">
		<div class="container">
			<h1 class="mt-5">Список книг</h1>

			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<a href="addBook.php" class="btn btn-success btn-lg btn-block">Добавить книгу</a>
				<table class="table table-bordered">
					<thead>
						<th>Название книги</th>
						<th></th>
					</thead>
					<tbody>
						<tr>
							<?php 
							foreach ($books as $book) {
								echo 
								"<tr>
								<td>{$book['name']} </td>
								";?>
								<td><a href="" class="item" data-id="<?= $book['id']?>" data-name="<?= $book['name'] ?>">Удалить</a></td>
								<?php
							}
							?>
						</tr>
					</tbody>
				</table>
			</form>

            <div id="contr_info"></div>

		</div>
	</main>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script>
		$('.item').on('click', function(event) {
            event.preventDefault();


			var book_id = parseInt($(this).attr('data-id'), 10);
			var bookName = parseInt($(this).attr('data-name'), 10);
			
			$.ajax({
				type: 'POST',
				data: {
					id: book_id
				},
				url: "deleteBook.php",
				cache: false,
                success: function(bookName){
                    alert('Книга под названием ' + bookName + ' удалена');
                },
                error: function(bookName) {
                	alert('Книгу под названием ' + bookName + 'не удалось удалить');
                }
			});

		});
	</script>

</body>
</html>