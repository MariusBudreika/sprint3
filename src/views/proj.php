<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <div class="header">
        <div>
            <a href="emp">Employees</a>
            <a href="proj">Project</a>
        </div>
</head>
<body>
<?php
include_once 'bootstrap.php';

print("<pre>");
$project = $entityManager->getRepository('Models\Project')->findAll();
print("<table id='proj'>
<tr>
<th>ID</th>
<th>Project</th>
<th>Employee</th>
<th>Actions</th>
</tr>");
    foreach ($project as $p)
        print("<tr>"
            . "<td>" . $p->getId()  . "</td>"
            . "<td>" . $p->getProject() . "</td>"
            . "<td>" . $p->getName() . "</td>"
            . "<td><button><a href='del.php?pdelete={$p->getId()}'>DELETE</a></button>"
            . "<button><a href='?updatable={$p->getId()}'>UPDATE</a></button></td>"
            . "</tr>");
    print("</table>"); 
?>
<button><a href="addproj">Create Project</a></button></td>

</body>
</html>