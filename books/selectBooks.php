<?php 

require_once('db.php');

$sql = "SELECT * FROM books_list";
$result = $db->query($sql);
$books = $result->fetchAll(PDO::FETCH_ASSOC);

?>