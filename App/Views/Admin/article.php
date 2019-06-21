<html>

<head>
    <title>About</title>
    <style>
        .article {
            border: solid 1px green;
            margin-bottom:10px;
            margin-left: 10px;
            padding: 10px;
            width: 15%;
            float: left;
        }
        .header {
            margin-left: 10px;
            margin-bottom:10px;
            padding: 10px;
            width: 20%;
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

    <div class="header">
        <span class="headelem"><a href="/index.php">Главная</a></span>
    </div> <?php
    foreach ($articles as $item) {

        ?> <div class="article">
            <a href="/article.php?id=<?php echo $item->id; ?>">Новость № <?php echo $item->id; ?> </a><br>
            <ul>
                <li>Title:  <?php echo $item->title; ?></li>
                <li>Author: <?php echo $item->author; ?></li>
                <li>Text:   <?php echo $item->getShortText(); ?></li>
            </ul>
            <form action="admin.php" method="post" name="form_article">
                <input type="hidden" name="id" value="<?php echo $item->id; ?>">
                <input type="submit" name="del" value="Del">
                <input type="submit" name="edit" value="Edit">
            </form>
        </div>
        <?php
    }
    ?>

            <form action="admin.php" method="post" name="form_article">
                <input type="submit" name="new" value="New">
            </form>


</body>

</html>
