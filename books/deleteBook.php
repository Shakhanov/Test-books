<?php 

require_once('db.php');

$id = $_POST['id'];

if (!empty($id)) {
	$sql = "DELETE FROM books_list WHERE id = :id";
	$stmt = $db->prepare($sql);
	
	$stmt->bindValue(':id',$id);
	$stmt->execute();
} else {
	die('Переменная Ajax не передана');
}

?>