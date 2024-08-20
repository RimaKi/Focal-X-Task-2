<?php

include "../Models/Post.php";

$id = $_GET['id'];
$post = new Post();
$post_data = $post->read($id);

//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <form method="post" action="../Controller/update.php?id=<?php echo $post_data['id'] ?>">
        <input class="form-control" type="text" placeholder="Title" aria-label="default input example" name="title"
               value="<?php echo $post_data['title'] ?>">
        <textarea class="form-control" placeholder="Content" aria-label="default input example"
                  name="content"><?php echo $post_data['content'] ?></textarea> <!-- //TODO MAKE design -->
        <!--        <input class="form-control" type="text" placeholder="Content" aria-label="default input example" name="content">-->
        <input class="form-control" type="text" placeholder="Author" aria-label="default input example" name="author"
               value="<?php echo $post_data['author'] ?>">
        <input type="submit">
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>