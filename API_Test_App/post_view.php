<?php

    $id = $_GET['id'];

    function getData($url) {
        $ch = curl_init();   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url);   
        $res = curl_exec($ch);
        return json_decode($res);
    }

    $post = getData("http://localhost:8000/api/post?id=".$id);
    
?>


<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php if ($post->status == 'Failure') {
    ?>
        <h1>Post not found</h1>
    <?php
} else {
    ?>
        <h1><?= $post->data->title ?></h1>
        <span><?= $post->data->created_at ?></span>
        <p><?= $post->data->text ?></p>
    <?php

}?>


    
</body>
</html>