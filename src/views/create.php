<?php
require_once('src\models\Note.php');
use d17030752\Notes\models\Note;

if (count($_POST) >0) {
$title = isset($_POST['title']) ? $_POST['title'] : '';
$content = isset($_POST['content']) ? $_POST['content'] : '';
$note = new Note( $title , $content);
$note ->save();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create new note</title>
    <link rel="stylesheet" href="src\views\resources\main.css">
</head>

<body>
    <h1>CREATE note</h1>
    <?php require 'resources/navbar.php';?>
    <form action="?view=create" method="POST">
        <input type="text" name="title" placeholder="Title...">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="create note"/>
    </form>
</body>
</html>