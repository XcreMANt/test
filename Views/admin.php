<html>

<head>
    <title>Admin</title>
    <style>
        .article {
            border: solid 1px green;
            margin-bottom:10px;
            padding: 10px;
            width: 30%;
        }
        .schedule {
            border: solid 1px blue;
            margin-bottom:10px;
            padding: 10px;
            width: 20%;
        }
        .image {
            border: solid 1px green;
            margin-bottom:10px;
            margin-right: 10px;
            padding: 10px;
            width: auto;
            float: left;
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
    <span class="headelem"><a href="/schedule.php">Расписание</a></span>
</div>
<?php
foreach ($admin['about'] as $item) {
    ?> <div class="article">
            <?php echo $item->getText(); ?>
       </div> <?php
}

foreach ($admin['schedule'] as $item) {
    ?> <div class="schedule">
            <ul>
                <li>Поезд: <?php echo $item->getName(); ?> </li>
                <li>Отправление: <?php echo $item->getDeparture(); ?> </li>
                <li>Прибытие: <?php echo $item->getArrival(); ?> </li>
            </ul>
        </div> <?php
}

foreach ($admin['gallery'] as $item) {
    ?> <div class="image">
           <img height="200px" src="<?php echo '../'.$item->getPath();?>" alt="<?php echo $item->getName();?>">
       </div> <?php
}
?>

</body>

</html>
