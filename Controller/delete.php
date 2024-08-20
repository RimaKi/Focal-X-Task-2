<?php
if (isset($_GET['id'])) {
    include '../Models/Post.php';
    $post = new Post();
    $post->delete($_GET['id']);
    header('Location:../Views/index.php');
}