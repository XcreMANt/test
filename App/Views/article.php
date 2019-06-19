<html>

<head>
    <title>About</title>
    <style>
        .article {
            border: solid 1px green;
            margin-bottom:10px;
            padding: 10px;
            width: 30%;
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
<!--    <span class="headelem"><a href="/index.php">Главная</a></span>-->
<!--    <span class="headelem"><a href="/schedule.php">Расписание</a></span>-->
<!--    <span class="headelem"><a href="/admin.php">Админка</a></span>-->
</div>
<?php

foreach ($articles as $item) {

    ?> <div class="article">
                <a href="/article.php?id=<?php echo $item->id; ?>">Новость № <?php echo $item->id; ?> </a><br>

        <ul>
            <?php echo $item->text; ?>
        </ul>

    </div> <?php
}
?>

</body>

</html>
