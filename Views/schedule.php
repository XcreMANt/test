<html>

<head>
    <title>News</title>
    <style>
        .schedule {
            border: solid 1px blue;
            margin-bottom:10px;
            padding: 10px;
            width: 20%;
        }
        .header {
            margin-left: 10px;
            margin-bottom:10px;
            padding: 10px;
            width: 40%;
        }
        .headelem {
            margin-left: 10px;
        }
    </style>
</head>

<body>
<div class="header">
    <span class="headelem"><a href="/index.php">Главная</a></span>
    <span class="headelem"><a href="/gallery.php">Галерея</a></span>
</div>
<?php

foreach ($schedule as $item) {

    ?> <div class="schedule">
        <!--        <a href="/articledb.php?id=--><?php //echo $item->getId(); ?><!--">Новость № --><?php //echo $item->getId(); ?><!-- </a><br>-->

        <ul>
           <li>Поезд: <?php echo $item->getName(); ?> </li>
           <li>Отправление: <?php echo $item->getDeparture(); ?> </li>
           <li>Прибытие: <?php echo $item->getArrival(); ?> </li>
        </ul>

    </div> <?php
}
?>

</body>

</html>
