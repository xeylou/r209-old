<?php

session_start();
$db = new SQLite3('r209-db-01.sqlite');

if (isset($_POST['inputUsername']) && isset($_POST['inputPassword'])) {

    $user = $_POST['inputUsername'];
    $pwd = $_POST['inputPassword'];

    $verifyUser = "SELECT * FROM users WHERE username = '$user' AND password = '$pwd'";
    $res=$db->query($verifyUser);
    
    if ($res->fetchArray()) {
        $tempReq="SELECT userId FROM users WHERE username = '$user'";
        $tempRes=$db->query($tempReq);

        while($tempData = $tempRes->fetchArray()) {
            $_SESSION['userId'] = $tempData['userId'];
        }
        header("Location: cart.php");
        exit();
    }
    else {
        header("Location: error.php");
    }
}
?>