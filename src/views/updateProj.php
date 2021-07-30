<?php

include_once 'bootstrap.php';

if (isset($_POST['projUpdate'])) {
    $pos = $entityManager->find('Models\Project', $_POST['update_id']);
    $pos->setProject($_POST['project']);
    $entityManager->flush();
    header('Location: proj');
}

if (isset($_GET['pupdate'])) {
    $pos = $entityManager->find('Models\Project', $_GET['pupdate']);
?>
    <form class="form" action="" method="POST">
        <table>
            <tr>
                <input type="hidden" name="update_id" value="<?php echo $pos->getId() ?>">
                <td> <label for="name">Update project:</label></td>
                <td> <input type="text" id="name" name="project" value="<?php echo $pos->getProject() ?>" Required></td>
            </tr>
            <tr>
                <td><input type="submit" name="projUpdate" value="Update"></td>
            </tr>
        </table>
    </form>
<?php } ?>