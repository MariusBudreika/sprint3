

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="form" action="" method="POST">
    <label  for="name">Employee name: </label><br>
    <input  type="text" name="name"><br>
    <select name="proj_id">
<?php
    $project = $entityManager->getRepository('Models\Project')->findAll();
    foreach($project as $p) {
        print('<option value=' . $p->getId() . '>' . $p->getProject() . '</option>');
    }
?>
    </select>
    <input class="in" type="submit" name='empAdd' value="Submit">
</form>
</body>
</html>