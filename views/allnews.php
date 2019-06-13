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

<?php

foreach ($data[$name] as $item) {

    ?> <div class="article">
        <a href="/article.php?id=<?php echo $item->getId(); ?>">Новость № <?php echo $item->getId(); ?> </a><br>

        <ul>
            <li>id: <?php echo $item->getId(); ?> </li>
            <li>author: <?php echo $item->getAuthor(); ?> </li>
            <li>title: <?php echo $item->getTitle(); ?> </li>
            <li>short text: <?php echo $item->getShortText(); ?> </li>
        </ul>

         </div> <?php
}
?>




</body>




</html>