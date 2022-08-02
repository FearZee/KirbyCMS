<?php snippet('header') ?>

    <main class="userpage">
        <?php if ($user = $kirby->user()): ?>
            <a href="<?= $user->url() ?>"><img class="avatar" src="<?= $user->avatar()->url() ?>"></a>
            <div>
                <h1><?= $user->name() ?> </h1>
                <h1><?= $user->email() ?> </h1>
                <h2><?= $user->role()->title() ?> </h2>
            </div>
        <?php endif ?>
    </main>
    
<?php snippet('footer') ?>
