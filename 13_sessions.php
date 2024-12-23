<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start();
if (isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    if($username === 'admin' && $password === '1234'){
        $_SESSION['username'] = $username;
        header('Location: /phpday1/dashboard.php');
    } else {
        echo 'Username or password is incorrect';
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    <button type="submit" name="submit">Submit</button>
</form>