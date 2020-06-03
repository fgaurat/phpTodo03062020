<?php include('todos.inc.php') ?>
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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add todo
        </button>

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
                <?php foreach ($arr_todos as $todo) : ?>
                    <tr>
                        <td>
                            <?= $todo->id ?>
                        </td>
                        <td><?= $todo->title ?></td>
                        <td><?= $todo->done ?></td>
                        <td><?= date('d/m/Y',$todo->dueDate) ?></td>
                        <td>
                            <a class='btn btn-danger' href="<?= $_SERVER['PHP_SELF'] ?>?id_delete=<?= $todo->id ?>">Delete</a>
                        </td>

                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Todo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <input type="hidden" name="todo_form">

                        <div class="form-group">
                            <label for="todo_title">Todo Title</label>
                            <input type="text" class="form-control" id="todo_title" name="todo_title" aria-describedby="helpTodoTitle" required>
                            <small id="helpTodoTitle" class="form-text text-muted">Todo Title</small>
                        </div>
                        <div class="form-group">
                            <label for="todo_dueDate">Todo dueDate</label>
                            <input type="date" class="form-control" id="todo_dueDate" name="todo_dueDate" aria-describedby="helpTodoDueDate" required>
                            <small id="helpTodoDueDate" class="form-text text-muted">Todo due date</small>
                        </div>
                        <div class="form-group">
                            <label for="todo_done">Done ?</label>
                            <input type="checkbox" class="form-control" id="todo_done" name="todo_done" aria-describedby="helpTodoDone" value="1">
                            <small id="helpTodoDone" class="form-text text-muted">Todo done ?</small>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>