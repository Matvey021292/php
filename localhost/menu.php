<?php
$menu = array(
    Array('id' => 0, 'url' => '/', 'title' => 'Main'),
    Array('id' => 1, 'url' => '/contacts.php', 'title' => 'Contacts'),
    Array('id' => 2, 'url' => '/about.php', 'title' => 'About'),
    Array('id' => 3, 'url' => '/shop.php', 'title' => 'Shop'),
);
foreach ($menu as $m) { ?>
    <li <?= ($_SERVER['REQUEST_URI'] == $m['url']) ? "class='active'": '' ?>><a href="<?= $m['url']?>"><?= $m['title']?></a></li>
    <?php
}