<?php
    session_start();

    if(isset($_SESSION['username'])){
        echo '<h1> Welcome ' . $_SESSION['username'] . '</h1>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo 'Please login <br>';
        echo '<a href="13_sessions.php">Login</a>';
    }