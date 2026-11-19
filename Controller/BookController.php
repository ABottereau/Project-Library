<?php
require_once 'Model/Book.php';

class BookController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function list() {
        $query = "SELECT b.id, b.title, CONCAT(a.first_name, ' ', a.last_name) AS author, b.publish_date FROM book b LEFT JOIN author a ON b.author_id = a.id";
        $statement = $this->pdo->query($query);
        $books = $statement->fetchAll(PDO::FETCH_FUNC, function($id, $title, $author, $publishedDate) {
            return new Book($id, $title, $author, $publishedDate);
        });
        include('./View/bookList.html.php');
        foreach($books as $book) {
            echo '<tr>';
            echo '<td><img class="book-img" src="../data/book_cover/' . $book->getTitle() . '.jpg" alt="image livre"></td>';
            echo '<td>' . $book->getTitle() . '</td>';
            echo '<td>' . $book->getAuthor() . '</td>';
            echo '<td>' . $book->getPublishedDate() . '</td>';
            echo '<td>' . $book->getAddedDate() . '</td>';
            echo '<td>' . $book->getReadingStatus() . '</td>';
            echo '<td><a href="edit-book.html"><img class="img-30px" src="../data/image/edit.png"
                                alt="image of a pen"></a><img class="img-30px" src="../data/image/trash.png"
                            alt="image of a trash"></td>
                </tr>';
        }
    }




}
