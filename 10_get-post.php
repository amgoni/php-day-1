<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])){

    echo $_POST['name'] . '<br>';
    echo $_POST['age'] . '<br>';
}
?>

<a href="10_get-post.php?name=John&age=25" >Click Here</a>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="text" name="age">
    </div>
    <button type="submit">Submit</button>
</form>