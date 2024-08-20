<?php
include '../Models/Post.php';

if (isset($_GET['id'])) {
    $post = new Post();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['title']) && !empty($_POST['content'])) {
            $post->title = $_POST['title'];
            $post->content = $_POST['content'];
            $post->author = $_POST['author'];
            $post->update($_GET['id']);
            header('Location:../Views/index.php');
        } else {
            echo "Title and Content are required!";
        }
    }
}