<?php
    if(isset($_GET['name'])) { //to make sure NAME is set
        //print_r($_GET);
        $name = htmlentities($_GET['name']); //htmlentities to make sure when submit is only text, for example <script></script>
        echo $name;
    }

    /* if(isset($_POST['name'])) { //to make sure NAME is set
        print_r($_POST);
        $name = htmlentities($_POST['name']); //htmlentities to make sure when submit is only text, for example <script></script>
        echo $name;
    } 

    if(isset($_REQUEST['name'])) { //to make sure NAME is set
        //print_r($_REQUEST);
        $name = htmlentities($_REQUEST['name']); //htmlentities to make sure when submit is only text, for example <script></script>
        echo $name;
    } 

    echo $_SERVER['QUERY_STRING']; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>

    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
        </li>
        <li>
            <a href="get_post.php?name=Steve">Steve</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>