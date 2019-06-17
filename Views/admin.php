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

        <form action="admin.php" method="post" name="form_about">
            <textarea name="text_field" cols="78" rows="10" required style="resize:none"><?php echo $item->getText(); ?></textarea>
            <input type="hidden" name="table_name" value="about">
            <input type="hidden" name="id" value="<?php echo $item->getId(); ?>">
            <input type="submit" name="edit" value="Edit">
        </form>
       </div> <?php
}

foreach ($admin['schedule'] as $item) {
    ?> <div class="schedule">
            <ul>
                <li>Поезд: <?php echo $item->getName(); ?> </li>
                <li>Отправление: <?php echo $item->getDeparture(); ?> </li>
                <li>Прибытие: <?php echo $item->getArrival(); ?> </li>
            </ul>
        <form action="admin.php" method="post" name="form_schedule">
            <input type="hidden" name="table_name" value="schedule">
            <input type="hidden" name="id" value="<?php echo $item->getId(); ?>">
            <input type="submit" name="del" value="Del">
        </form>
        </div> <?php
}
?>

<form action="admin.php" method="post" name="form_schedule">
    <input type="hidden" name="table_name" value="schedule">
    <input type="text" name="sched_name" placeholder="Название">
    <input type="time" name="departure">
    <input type="time" name="arrival">
    <input type="submit" name="add" value="Add">
</form>

<?php
foreach ($admin['gallery'] as $item) {
    ?> <div class="image">
           <img height="200px" src="<?php echo '../'.$item->getPath();?>" alt="<?php echo $item->getName();?>">
        <form action="admin.php" method="post" name="form_img">
            <input type="hidden" name="table_name" value="gallery">
            <input type="hidden" name="id" value="<?php echo $item->getId(); ?>">
            <input type="submit" name="del" value="Del">
        </form>
       </div>

    <?php
}
?>
<form action="admin.php" method="post" name="form_img">
    <input type="hidden" name="table_name" value="gallery">
    <input type="submit" name="add" value="Add">
</form>

</body>

</html>
