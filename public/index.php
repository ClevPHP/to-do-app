<?php

    //include 'todo/task.php';

    //Procedural Form Processing Here
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>ToDo List | Cleveland PHP User Group</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

</head>
<body>

    <div class="container">

        <div class="col-md-6 col-md-offset-3">

            <h1>ToDo App</h1>

            <?php include '../lib/templates/progress.html'; ?>

            <?php include '../lib/templates/task.html'; ?>
            <?php include '../lib/templates/task.html'; ?>
            <?php include '../lib/templates/task.html'; ?>

            <hr/>

            <?php include '../lib/templates/task-completed.html'; ?>
            <?php include '../lib/templates/task-completed.html'; ?>

        </div>

    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>