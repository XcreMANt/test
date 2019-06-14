<?php

require __DIR__.'/autoload.php';

$data = $db->query('select * from articles where title=:title', [':title' => 'about']);