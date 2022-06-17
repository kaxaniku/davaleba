<?php

    if (isset($_POST['name']) && $_POST['name']) {
        $name = $_POST['name'];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://localhost:8000/api/category/create");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "name=".$name);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);
        print_r($server_output);
        curl_close ($ch);

    }

?>


<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="text" name="name">
        <button>Create</button>
    </form>
</body>
</html>