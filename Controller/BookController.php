<?php

require_once 'Model/Book.php';
echo 'Ceci est le BookController';

$query = "SELECT b.id, b.title, b.publish_date, a.first_name, a.last_name FROM book b LEFT JOIN author a ON b.author_id = a.id";
$statement = $pdo->query($query);
$books = $statement->fetchAll(PDO::FETCH_CLASS, "Book");

echo "<pre>";
print_r($books);
echo "</pre>";