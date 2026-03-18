<?php view('partials.head', compact('title')); ?>
<main class="page-main">
    <h1><?= $title ?></h1>

    <?php if (count($students) > 0) { ?>
    <ol>
            <?php foreach ($students as $student) { ?>
        <li>
            <a href="/etudiant?id=<?= $student->id?>">
                    <?= $student->last_name ?> <?= $student->first_name ?>
            </a>
        </li>

        <?php } ?>


    </ol>

    <a href="/etudiants/create" class="button">Ajouter un étudiant</a>

    <?php } else { ?>
    <p>Mais où sont-ils&nbsp;?</p>
    <?php } ?>


</main>


<?php view('partials.nav'); ?>


<?php view('partials.footer'); ?>
