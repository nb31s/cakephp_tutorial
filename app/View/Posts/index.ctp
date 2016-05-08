<h2>記事一覧</h2>

<ul>
<?php foreach ($posts as $post) : ?>
<li>
<?php
//debug($post);
//echo h($post['Post']['title']); //hとはCakePHPが持っているHTML Special charactoresの省略形
echo $this->Html->Link($post['Post']['title'], '/posts/view/' .$post['Post']['id']);
?>
</li>
<?php endforeach; ?>
</ul>