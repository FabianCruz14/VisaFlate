<?php
    session_start();
    $_SESSION["ID"]=NULL;
    session_destroy();
    header("Location: index.html");
    exit();
?>