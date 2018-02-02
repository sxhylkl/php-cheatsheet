<?php

    session_start();
    unset($_SESSION['name']); //delete 'name' sessions
    session_destroy(); //destroy sessions
?>