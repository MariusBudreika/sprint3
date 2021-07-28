<?php

namespace Models;

include_once 'bootstrap.php';

if (isset($_REQUEST['projAdd'])) {
  $proj = new Project();
  $proj->setProject($_REQUEST['project']);
  $entityManager->persist($proj);
  $entityManager->flush();
  header("Location: proj");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AddProject</title>
</head>

<body>
  <form class="form" action="" method="POST">
    <label class="in" for="name">New project: </label><br>
    <input class="in" type="text" name="project"><br>
    <input class="in" type="submit" name='projAdd' value="Submit">
  </form>
</body>
</html>