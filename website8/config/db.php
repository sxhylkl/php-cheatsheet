<?php
    //require('config/config.php');
    //Not neede because already define in index.php and post.php
    // Create Connection
    $conn = mysqli_connect(DB_HOST ,DB_USER, DB_PASS, DB_NAME);

    // Check Connection
    if(mysqli_connect_errno()) {
        // Connection Failed
        echo 'Failed to connect to MysQL '.mysqli_connect_errno();
    }
?>