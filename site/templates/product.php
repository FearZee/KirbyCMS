<?php snippet('header') ?>

<main>
    <article>
        <h1><?= $page->title() ?></h1>
        <div style="display: flex">
            <?php snippet('discount') ?>
        </div>

        <picture>
            <source media="(max-width: 480px)" srcset="<?= $page->image()->resize(480)->url() ?>">
            <source media="(max-width: 800px)" srcset="<?= $page->image()->resize(800)->url() ?>">
            <source media="(max-width: 1100px)" srcset="<?= $page->image()->resize(1100)->url() ?>">
            <img src="<?= $page->image()->url() ?>" alt="" style="width: auto;">
        </picture>
    </article>
</main>

<?php snippet('footer') ?>