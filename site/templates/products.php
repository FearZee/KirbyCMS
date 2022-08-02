<?php snippet('header') ?>

    <main class="main">
        <h1><?= $page->title() ?></h1>
        
        <ul class="products">
            <?php foreach($page->children()->listed() as $product): ?>
                <li>
                    <a href="<?= $product->url() ?>">
                        <figure>
                            
                            <?= $product->image()->crop(400, 500) ?>
                            <figcaption><?= $product->title() ?></figcaption>
                        </figure>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
        
    </main>
    
<?php snippet('footer') ?>
