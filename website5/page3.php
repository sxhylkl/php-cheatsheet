<?php
    $user =['name'=> 'Brad', 'email' => 'test@test.com', 'age' => '35'];
    $user = serialize($user); //to prepare for cookies, MUST BE STRING

    setcookie('user', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE['user']); //BRING BACK OLD ARRAY, before serialize
    print_r($user);
?>