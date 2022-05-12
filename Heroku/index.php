<?php
    $json = file_get_contents("./credentials.json");
    $credentials = json_decode($json, true);
    include_once("home.php");
?>