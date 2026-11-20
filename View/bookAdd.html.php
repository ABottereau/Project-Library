    <main>
        <form class="add-book-form" method="post">
            <label for="title-book-input" class="label-text">Titre</label>
            <input id="title-book-input" class="form-book-title-input" type="text" />
            <label for="select-author-input" class="label-text">Auteur</label>
            <div class="form-book-author-select">
                <select id="select-author-input" class="select-author" name="author">
                    <option value="">--Choisir un auteur--</option>
                    <option value="1">Christopher PAOLINI</option>
                    <option value="2">ZOGARTH</option>
                    <option value="3">Matt DINNIMAN</option>
                </select>
                <a class="button-new-author" href="add-author.html">Nouvel Auteur</a>
            </div>
            <div class="bottom-form">
                <div class="add-image-form">
                    <div class="form-image-label-parcourir">
                        <label for="parcourir-button-add-book-form" class="label-text">Image</label>
                        <button id="parcourir-button-add-book-form" class="parcourir-button">Parcourir</button>
                    </div>
                    <div class="form-img-container">
                        <img class="image-form-book" src="" alt="page de garde de livre">
                    </div>
                </div>
                <div class="bottom-right-form">
                    <div class="bottom-right-top-form">
                        <div class="form-date">
                            <label for="date-input" class="label-text">Date de parution</label>
                            <input id="date-input" class="input-form-book" type="date" />
                        </div>
                        <div class="form-book-state-select">
                            <label for="state-select-book-form-input" class="label-text">Etat</label>
                            <select id="state-select-book-form-input" class="input-form-book" name="state">
                                <option value="">--Choisir un etat--</option>
                                <option value="1">Lu</option>
                                <option value="2">En cours</option>
                                <option value="3">Non lu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-add-button">
                        <button class="form-submit-button" type="submit">Ajouter</button>
                    </div>
                </div>
            </div>
        </form>
    </main>