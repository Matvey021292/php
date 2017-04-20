<?php
$menu = [
    ['id' => 0, 'url' => '/', 'title' => 'Main'],
    ['id' => 1, 'url' => '/contact.php', 'title' => 'Contacts'],
    ['id' => 2, 'url' => '/about.php', 'title' => 'About'],
    ['id' => 3, 'url' => '/shop.php', 'title' => 'Shop'],
];
foreach ($menu as $m) { ?>
    <li <?= ($_SERVER['REQUEST_URI'] == $m['url']) ? "class='active'": '' ?>><a href="<?= $m['url']?>"><?= $m['title']?></a></li>
    <?php
}