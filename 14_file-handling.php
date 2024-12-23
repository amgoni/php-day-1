<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'users.txt';

if(file_exists($file)){
    // Read file
    $fileContent = file_get_contents($file);
    echo $fileContent;
} else {
    // Write file
    $fileContent = 'John Doe' . PHP_EOL;
    file_put_contents($file, $fileContent);
    echo 'File created';
}