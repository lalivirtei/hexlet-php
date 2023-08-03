<?php

$links = [
    ['url' => 'https://google.com', 'name' => 'Google'],
    ['url' => 'https://yandex.com', 'name' => 'Yandex'],
    ['url' => 'https://bingo.com', 'name' => 'Bingo']
];

?>

<!-- BEGIN (write your solution here) -->
<?php foreach ($links as $link): ?>
<a href="<?= $link['url'] ?>"><?= $link['name'] ?></a>
<?php endforeach; ?>
<!-- END -->

