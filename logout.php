<?php
    session_start();

    session_destroy();
    header('Location: /phpday1/13_sessions.php');