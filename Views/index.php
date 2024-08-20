<?php

include "../Models/Post.php";

$post = new Post();
$posts = $post->allPost();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        a {
            text-decoration: none;
            color: white;
        }

        button {
            border: none;
            border-radius: 6px;
        }
    </style>
</head>
<body class="mx-auto">
<div style="margin: 6px auto;">
    <div class="container mt-5">
        <button type="button" style="background: cadetblue; width: 100px;"><a
                    href="../Views/add.php">Add</a></button>
    </div>
    <div class="flex m-5">
        <?php foreach ($posts as $p): ?>
            <div class="border solid m-4">
                <table>
                    <tr>
                        <td> Title:</td>
                        <td><?php echo $p['title'] ?></td>
                    </tr>
                    <tr>
                        <td> Author:</td>
                        <td><?php echo $p['author'] ?></td>
                    </tr>
                    <tr>
                        <td>Content:</td>
                        <td class="d-inline"><?php echo substr($p['content'], 0, 200)."........."; ?></td>
                    </tr>
                </table>
                <div style="margin-top: 10px;" class="justify-end m-4">
                    <button type="button" style="background: deepskyblue;"><a
                                href="../Views/edit.php?id=<?php echo $p['id'] ?>">Edit</a></button>
                    <button type="button" style="background: red; "><a
                                href="../Controller/delete.php?id=<?php echo $p['id'] ?>">Delete</a></button>
                    <button type="button" style="background: green;"><a
                                href="../Views/view.php?id=<?php echo $p['id'] ?>" style="">View</a></button>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>