<?php
require_once 'Model/Author.php';
echo 'Ceci est le AuthorController';

$query = "SELECT id, first_name, last_name FROM author";
$statement = $pdo->query($query);
$authors = $statement->fetchAll(PDO::FETCH_FUNC, function($id, $firstName, $lastName) {
    return new Author($id, $firstName, $lastName);
});

echo "<pre>";
print_r($authors);
echo "</pre>";