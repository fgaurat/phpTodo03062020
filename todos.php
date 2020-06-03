<?php include('todos.inc.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>

    <?php include('bootstrap.inc.php') ?>

</head>
<body>
    <div class="container">
    <h1>Todos</h1>
    <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>done</th>
                    <th>DueDate</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($arr_todos as $todo):?>
            <tr>
                <td>
                    <?= $todo->id ?>
                </td>
                <td><?= $todo->title ?></td>
                <td><?= $todo->done ?></td>
                <td><?= $todo->dueDate ?></td>
                <td></td>
            </tr>
            <?php endforeach;?>

            </tbody>
    </table>
    
    </div>
</body>
</html>