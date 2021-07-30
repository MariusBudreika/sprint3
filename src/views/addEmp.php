<?php
namespace Models;
include_once 'bootstrap.php';

if (isset($_POST['create_emp'])) {
    $emp = new Employee($_POST['name'], $_POST['project_id']);
    $entityManager->persist($emp);
    $entityManager->flush();
    header("Location: emp");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    <form class="form" action="" method="POST">
        <table>
            <tr>
                <td> <label for="name">Employee name:</label></td>
                <td> <input type="text" id="name" name="name"></td>
            </tr>
            <tr>
                <td><label for="project_id">Project:</label></td>
                <td><select id="project_id" name="project_id">
                    <?php
                    $project = $entityManager->getRepository('Models\Project')->findAll();
                    foreach ($project as $p) {
                        print('<option value=' . $p->getId() . '>' . $p->getProject() . '</option>');
                    }
                    ?>
                    </select></td>
            </tr>
            <tr>
                <td><input type="submit" name="create_emp" value="Create Employee"></td>
            </tr>
        </table>
</body>
</form>
</html>