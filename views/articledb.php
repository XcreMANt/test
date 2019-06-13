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

    foreach ($data[$name] as $item) {
        if ($item->getId() == $_GET['id']) {

            ?>
            Новость № <?php echo $item->getId(); ?> <br>

            <ul>
                <li>id: <?php echo $item->getId(); ?> </li>
                <li>author: <?php echo $item->getAuthor(); ?> </li>
                <li>title: <?php echo $item->getTitle(); ?> </li>
                <li>text: <?php echo $item->getText(); ?> </li>
            </ul>
            <?php
        }
    }
    ?>



</div>


</body>


</html>
