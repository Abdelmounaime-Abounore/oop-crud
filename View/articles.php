<?php include_once '../Controller/controllerSelect.php' ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Articles</title>
    </head>
    <body>
        <table class="table bg-light my-3 w-75 m-auto text-center">
            <tr>
                <th class="p-4">id</th>
                <th class="p-4">Title</th>
                <th class="p-4">Author</th>
                <th class="p-4">Category</th>
                <th class="p-4">Content</th>
                <th class="p-4">Update</th>
                <th class="p-4">Delete</th>
            </tr>
            <tbody>
                <?php foreach($rows as $row){?>
                <tr>
                    <td class="p-4"><?= $row['id']; ?></td>
                    <td class="p-4"><?= $row['title']; ?></td>
                    <td class="p-4"><?= $row['author']; ?></td>
                    <td class="p-4"><?= $row['category']; ?></td>
                    <td class="p-4"><?= $row['content']; ?></td>
                    <td class="p-4"> <button class="btn btn-primary">Update</button></td>
                    <td class="p-4"> <button class="btn btn-danger">Delete</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>