<?php
require_once 'Model/Author.php';
require_once 'config/config.php';



function listAuthor($pdo) {
   $query = "SELECT id, first_name, last_name FROM author";
    $statement = $pdo->query($query);
    $authors = $statement->fetchAll(PDO::FETCH_FUNC, function($id, $firstName, $lastName) {
        return new Author($id, $firstName, $lastName);
}); 
}

if ($infos_uri[3] === null) {
    listAuthor($pdo);
    echo '<main>
        <div class="button-and-search-container">
            <div class="add-button-container">
                <a class="add-button" href="add-author.html">Ajouter un auteur</a>
            </div>
            <form class="search-form">
                <input type="text" placeholder="Rechercher..." />
                <button type="submit" class="search-button"><img class="search-button-img"
                        src="../data/image/magnifying-glass-solid-full.svg" alt="loupe de recherche"></button>
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Prénom&nbsp;<img class="sorting-arrows" src="../data/image/up-down-solid-full.svg"
                            alt="icone fleches tri"></th>
                    <th scope="col">Nom&nbsp;<img class="sorting-arrows" src="../data/image/up-down-solid-full.svg"
                            alt="icone fleches tri"></th>
                    <th scope="col">Nombre d\'ouvrages&nbsp;<img class="sorting-arrows"
                            src="../data/image/up-down-solid-full.svg" alt="icone fleches tri"></th>
                    <th scope="col" class="table-column-edit-delete"></th>
                </tr>
            </thead>
            <tbody>';
    foreach($authors as $author) {
        echo '<tr>';
        echo '<td>' . $author[1] . '</td>';
        echo '<td>' . $author[2] . '</td>';
        echo '</tr>';
        echo '<td><a href="edit-author.html"><img class="img-30px" src="../data/image/edit.png"
                                alt="image of a pen"></a><img class="img-30px" src="../data/image/trash.png"
                                alt="image of a trash"></td>';
    }
    echo '</tbody>
        </table>';
}