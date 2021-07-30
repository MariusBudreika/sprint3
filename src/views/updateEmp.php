<?php

namespace Models;
include_once 'bootstrap.php';

if (isset($_POST['empUpdate'])) {
    $emp = $entityManager->find('Models\Employee', $_POST['update_id']);
    $emp->setName($_POST['name']);
    $emp->setProject_id($_POST['project_id']);
    $entityManager->flush();
    header('Location: emp');
}

if (isset($_GET['eupdate'])) {
    $emp = $entityManager->find('Models\Employee', $_GET['eupdate']);
?>
<form class="form" action="" method="POST">
    <table>
        <tr>
            <input type="hidden" name="update_id" value="<?php echo $emp->getId() ?>">
            <td> <label for="name">Update name:</label></td>
            <td> <input type="text" id="name" name="name" value="<?php echo $emp->getName() ?>" Required></td>
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
            <td><input type="submit" name="empUpdate" value="Update"></td>
        </tr>
    </table>
</form>
 <?php } ?>