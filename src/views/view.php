<?php
use d17030752\Notes\models\Note;
require_once('src/models/Note.php');

if (count($_POST) >0) {
$title =isset($_POST['title']) ? $_POST['title'] : '';
$content=isset($_POST['content']) ? $_POST['content'] : '';
$uuid =$_POST['uuid'];
$note = Note::get($uuid);
$note->setTitle($title);
$note->setContent($content);
$note->setUUID($uuid);
$note->update();
}else
if (isset($_GET['id'])) {
    $note = Note::get($_GET['id']);
} else {
    header('Location: http://localhost:80//notes-ap/?view=home');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src\views\resources\main.css">
</head>
<body>
<h1><?php echo isset($_GET['id']) ? 'update note' : 'view note' ;?></h1>
<?php require 'resources/navbar.php';?>
<form action="?view=view&id=<?php echo $note->getUUID();?>" method="POST">
    <input type="text" name="title" placeholder="title..." 
    value="<?php echo $note->getTitle(); ?>"></input>
    <input type="hidden" name="uuid" value="<?php echo $note->getUUID();?>">
    <textarea name="content" id="" cols="30" rows="10">
        <?php echo $note->getContent();?></textarea>
    <input type="submit" value="update note"/>
</form>
</body>
</html>