<?php
if (isset($_POST['submit'])) {
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
    if (!empty($_FILES['file']['name'])) {
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $temp = explode('.', $file_name);
        $file_ext = strtolower(end($temp));

        if (in_array($file_ext, $allowed_ext)) {
            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }
            $target_dir = "uploads/$file_name";
            if (move_uploaded_file($file_tmp, $target_dir)) {
                $message = 'File uploaded successfully';
            } else {
                $message = 'Failed to move the uploaded file';
            }
        } else {
            $message = 'Please upload a valid image file';
        }
    } else {
        $message = 'Please choose a file to upload';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <p><?php echo $message ?? null; ?></p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <label for="file">Upload File:</label>
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>
