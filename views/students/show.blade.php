<?php view('partials.head', compact('title')); ?>
<main class="page-main">
    <h1><?= $title ?></h1>

    <ul>
        <li><?= $student['first_name'] ?></li>
        <li><?= $student['last_name'] ?></li>
        <li><?= $student['matricule'] ?></li>
        <li><?= $student['birth_date'] ?></li>
        <li><?= $student['profile_photo'] ?></li>
        <li><?= $student['email'] ?></li>
    </ul>

</main>


<?php view('partials.nav'); ?>


<?php view('partials.footer'); ?>
