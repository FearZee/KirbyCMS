<?php

    $price = 0;
    $discount_kirby = 0;

    if($page->discount()){
        $discount = $page->price()->value() * $page->discount()->value() / 100;
        $new_price = $page->price()->value() - $discount;
    }
        

?>

<?php if(!$page->discount()->value()): ?>
    <p><?= $page->price()->value() ?>€</p>
<?php else: ?>
    <p style="text-decoration: line-through"><?= $page->price()->value() ?>€</p>
    <p><?= $new_price ?>€</p>
<?php endif ?>