<html>

<head>
    <title>Article</title>
    <style>
        .article {
            border: solid 1px red;
            margin-bottom:10px;
            padding: 10px;
            width: 50%;

        }
    </style>
</head>

<body>

<div class="article">
    <?php
//var_dump($data);
    //    require __DIR__.'/newsClass.php';
//    require __DIR__.'/../somecode.php';

    foreach ($data[$name] as $item) {
        if ($item->getId() == $_GET['id']) {
//            $view->assign($item->getId(), $item->getText());
//            $view->render($item->getId());
            ?>
            Новость № <?php echo $item->getId(); ?> <br>

            <?php echo $item->getText(); ?> <?php
        }
    }
    ?>

</div>


</body>


</html>
