<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Set a cookie
setcookie('username', 'Frank', time() + (86400 * 30)); // 1 day
if (isset($_COOKIE['username'])){
    echo 'User ' . $_COOKIE['username'] . ' is set';
} 

// Delete a cookie
setcookie('username', '', time() - 86400); // 1 hour