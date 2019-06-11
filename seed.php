<?php

include __DIR__.'/DB.php';

$db = new DB();

$req = 'insert into articles title, text, author values (:title, :text, :author)';
$req2 = 'insert into articles title, text, author values (\'article1\', \'qqqqq wwwww eeeee rrrrr tttttt yyyyyyy uuuuuu\', \'Z.Z. ZZZ\')';
$args = [':title' => 'article1', ':text' => 'qqqqq wwwww eeeee rrrrr tttttt yyyyyyy uuuuuu', ':author' => 'Z.Z. ZZZ'];

//$db->execute($req2);
$db->query($req, $args);