<?php

require_once 'Model/Book.php';
echo 'Ceci est le BookController';

$query = "SELECT b.id, b.title, CONCAT(a.first_name, ' ', a.last_name) AS author, b.publish_date FROM book b LEFT JOIN author a ON b.author_id = a.id";
$statement = $pdo->query($query);
$books = $statement->fetchAll(PDO::FETCH_FUNC, function($id, $title, $author, $publishedDate) {
    return new Book($id, $title, $author, $publishedDate);
});

echo "<pre>";
print_r($books);
echo "</pre>";