<html>

<head>
    <title>Gallery</title>
    <style>
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
    <span class="headelem"><a href="/schedule.php">Расписание</a></span>
    <span class="headelem"><a href="/admin.php">Админка</a></span>
</div>

<?php

foreach ($gallery as $item) {

    ?> <div class="image">
        <img height="400px" src="<?php echo '../'.$item->getPath();?>" alt="<?php echo $item->getName();?>">
    </div> <?php
}
?>

</body>

</html>
