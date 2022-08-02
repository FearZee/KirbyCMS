<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= css('assets/css/index.css') ?>
    <title>Document</title>
</head>
<body>
    <header class="header">
        <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
        <div style="display: flex">
            <?php if ($user = $kirby->user()): ?>
                <a href="/kirby/plainkit-main/userpage"><img class="avatar" src="<?= $user->avatar()->url() ?>"></a>
                <p><?= $user->name() ?> </p>
            <?php endif ?>
        </div>
        <nav class="menu">
            <ul>
                <?php foreach($site->children()->listed() as $item): ?>
                    <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
                <?php endforeach ?>
                <?php if ($user = $kirby->user()): ?>
                    <li>
                        <a href="<?= url('logout') ?>">Logout</a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?= url('login') ?>">Login</a>
                    </li>
                <?php endif ?>
            </ul>
            
        </nav>
    </header>