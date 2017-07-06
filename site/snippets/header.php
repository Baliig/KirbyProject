<header>
    <div class="container">
        <div class="logoHeader">
            <a class="menuTitle" href="<?= url() ?>" rel="home">
                <img src="<?php echo kirby()->urls()->assets() . '/images/logo.png' ?>" >
                <h3>J. Portelli</h3>
            </a>
        </div>
        <div class="menuHeader" >
            <?php snippet('menu') ?>
        </div>
    </div>
</header>

<ul id="menu">
    <?php foreach($pages->visible() as $item): ?>
        <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
            <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
    <?php endforeach ?>
</ul>

