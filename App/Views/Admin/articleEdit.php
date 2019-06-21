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
        <span class="headelem"><a href="/index.php">Главная</a></span>
    <!--    <span class="headelem"><a href="/schedule.php">Расписание</a></span>-->
        <span class="headelem"><a href="/admin.php">Админка</a></span>
</div>
        <div class="article">
            <form action="admin.php" method="post" name="form_article_edit">
                <textarea name="text" cols="70" rows="13" required style="resize:none"><?php echo $article->text ?: ''; ?></textarea>
                <input type="hidden" name="table_name" value="article_edit">
                <input type="text" name="id" value="<?php echo $article->id ?: ''; ?>">
                <input type="text" name="title" value="<?php echo $article->title ?: ''; ?>">
                <input type="text" name="author" value="<?php echo $article->author ?: ''; ?>">
                <input type="submit" name="add" value="Add">
            </form>
        </div>

<!--<div class="article">-->
<!--    <form action="admin.php" method="post" name="form_article_edit">-->
<!--        <textarea name="text" cols="70" rows="13" required style="resize:none"></textarea>-->
<!--        <input type="hidden" name="table_name" value="article_edit">-->
<!--        <input type="text" name="id" value="">-->
<!--        <input type="text" name="title" value="">-->
<!--        <input type="text" name="author" value="">-->
<!--        <input type="submit" name="add" value="Add">-->
<!--    </form>-->
<!--</div>-->

</body>
