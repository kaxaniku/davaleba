<?php

    function getData($url) {
        $ch = curl_init();   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url);   
        $res = curl_exec($ch);
        return json_decode($res);
    }

    $categories = getData("http://localhost:8000/api/categories");
    $posts = getData("http://localhost:8000/api/posts");
?>



<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <h1>Categories</h1>
    <ul>
        <?php foreach ($categories->data->categories as $value) :
            ?>
                <li><?= $value->name ?></li>
            <?php
        endforeach; ?>
    </ul>

    <br>

    <div>
        <?php foreach ($posts->data->posts as $key => $value) :
            ?>
                <div>
                    <h2><?= $value->title ?></h2>
                    <span><?= $value->created_at ?></span>
                    <p>
                        <?= $value->S_text ?>
                    </p>
                </div>
            <?php
        endforeach; ?>
    </div>
    
</body>
</html>