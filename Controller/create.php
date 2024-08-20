<?php
include '../Models/Post.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post = new Post();

    if (!empty($_POST['title']) && !empty($_POST['content'])) {
        $post->title = $_POST['title'];
        $post->content = $_POST['content'];
        $post->author = $_POST['author'];
        $post->create();
        header('Location:../Views/index.php');
    } else {
        echo "Title and Content are required!";
    }
}