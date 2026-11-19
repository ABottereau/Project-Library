<?php
require_once 'Model/Author.php';


class AuthorController 
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function list() {
        $query = "SELECT id, first_name, last_name FROM author";
        $statement = $this->pdo->query($query);
        $authors = $statement->fetchAll(PDO::FETCH_FUNC, function($id, $firstName, $lastName) {
            return new Author($id, $firstName, $lastName);
        });
        include('./View/authorList.html.php');
        foreach($authors as $author) {
            echo '<tr>';
            echo '<td>' . $author->getFirstName() . '</td>';
            echo '<td>' . $author->getLastName() . '</td>';
            echo '<td></td>';
            echo '<td><a href="edit-author.html"><img class="img-30px" src="../data/image/edit.png"
                                    alt="image of a pen"></a><img class="img-30px" src="../data/image/trash.png"
                                    alt="image of a trash"></td>';
            echo '</tr>';
            
        }
    }
}

