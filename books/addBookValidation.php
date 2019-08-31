<?php

require_once('db.php');

	$admit = true;

	$bookName = $_POST['bookName'];
	$postDate = $_POST['postDate'];
	$description = $_POST['description'];
	$numberOfPages = $_POST['pages'];
	$price = $_POST['price'];

	//Проверка названия на корректность
	if (empty($bookName)) {
		$admit = false;
	} else if ((strlen($bookName) > 200)) {
		$admit = false;
	} 

	//Проверка даты
	if (empty($postDate)) {
		$admit = false;
	} else if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$postDate)) {
		$admit = false;
	}

	//Проверка описания
	if (empty($description)) {
		$admit = false;
	}	else if ((strlen($description) > 200)) {
		$admit = false;
	} 

	//Проверка страниц
	if (empty($numberOfPages)) {
		$admit = false;
	} else if (!preg_match("/^[1-9][0-9]*$/i",$numberOfPages)){
		$admit = false;
		$numberOfPages = "";
	}


	if ($admit) {
		$addBook = "INSERT INTO books_list (name,description,postDate,numberOfPages,price) VALUES (:bookName, :description, :postDate, :numberOfPages, :price)";
		$stmt = $db->prepare($addBook);
		$stmt->bindValue(':bookName',$bookName);
		$stmt->bindValue(':description',$description);
		$stmt->bindValue(':postDate',$postDate);
		$stmt->bindValue(':numberOfPages',$numberOfPages);
		$stmt->bindValue(':price',$price);
		$stmt->execute();

		header("Location: booksList.php");
    }
    
    