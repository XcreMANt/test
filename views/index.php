<html>

<head>
    <title>News</title>
    <style>
        .article {
            border: solid 1px green;
            margin-bottom:10px;
            padding: 10px;
            width: 30%;

        }
    </style>
</head>

<body>

<?php foreach ($data as $item) {

    $view->assign($item->getId(), $item->getShortText());
    $view->render($item->getId());
    ?> <div class="article">
        <a href="/article.php?id=<?php echo $item->getId(); ?>">Новость № <?php echo $item->getId(); ?> </a><br>

        <?php
//            echo $item->getShortText();
        $view->display($item->getId());
        ?> </div> <?php
    }
?>




</body>




</html>