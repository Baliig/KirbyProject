<?php snippet('head') ?>
<?php snippet('header') ?>

    <main>

    <div class="title">Vous pouvez me contacté ici:</div>

        <form action="/send_form_email.php" method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" />
            </div>
            <div>
                <label for="email">Courriel :</label>
                <input type="email" id="email" />
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message"></textarea>
            </div>

            <div class="button">
                <button type="submit">Envoyer votre message</button>
            </div>
        </form>


    </main>

<?php snippet('footer') ?>