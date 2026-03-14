<?php view('partials.head', compact('title')); ?>
<main class="page-main">
    <h1><?= $title ?></h1>

    <form action="/etudiants" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?= csrf_token() ?>"/>
        <span>Les champs munis de * sont requis</span>
        <div>
            <label for="family-name">Nom de famille <sup>*</sup></label>
            <input type="text" id="family-name" name="last_name" placeholder="Jean" required>
        </div>

        <div>
            <label for="first-name">Prénom <sup>*</sup></label>
            <input type="text" id="first-name" name="first_name" placeholder="Valjean" required>
        </div>

        <div>
            <label for="matricule">Matricule <sup>*</sup></label>
            <input type="text" id="matricule" name="matricule" placeholder="785478erre" required>
        </div>

        <div>
            <label for="email">Adresse e-mail <sup>*</sup></label>
            <input type="email" id="email" name="email" placeholder="jean.vajean@gmail.com" required>
        </div>

        <div>
            <label for="birth-date">Date de naissance</label>
            <input type="date" id="birth-date" name="birth_date">
        </div>

        <div>
            <label for="profile-photo">Photo de profil <small>jpeg ou png, 2mo maximum</small></label>
            <input type="file" id="profile-photo" name="profile_photo">
        </div>

        <div>
            <button type="submit">Enregistrer l’étudiant</button>
        </div>

    </form>
</main>

<?php view('partials.nav'); ?>


<?php view('partials.footer'); ?>