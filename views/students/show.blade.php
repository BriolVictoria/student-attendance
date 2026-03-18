<?php view('partials.head', compact('title')); ?>
<main class="page-main">
    <h1><?= $title ?></h1>

    <dl>
        <div>
            <dt>Nom&nbsp;:</dt>
            <dd><?= $student->last_name ?></dd>
        </div>

        <div>
            <dt>Prénom&nbsp;:</dt>
            <dd><?= $student->first_name ?></dd>
        </div>

        <div>
            <dt>Email&nbsp;:</dt>
            <dd><?= $student->email ?></dd>
        </div>

        <div>
            <dt>Matricule&nbsp;:</dt>
            <dd><?= $student->matricule ?></dd>
        </div>

        <div>
            <dt>Data d’anniversaire&nbsp;:</dt>
            <dd><?= $student->matricule ?></dd>
        </div>

        <div>
            <dt>Photo de profil&nbsp;:</dt>
            <dd><?= $student->profile_photo ?></dd>
        </div>

    </dl>

    <div>
        <a href="/etudiant/edit?id=<?= $student->id?>" class="button">Modifier la fiche de <?= $student->first_name ?></a>
        <a href="/etudiants" class="delete">Supprimer la fiche de <?= $student->first_name ?></a>
    </div>

</main>


<?php view('partials.nav'); ?>


<?php view('partials.footer'); ?>
