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
$emp = $entityManager->getRepository('Models\Employee')->findAll();
print("<table id='customers'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Project</th>
<th>Actions</th>
</tr>");
    foreach ($emp as $e)
        print("<tr>"
            . "<td>" . $e->getId()  . "</td>"
            . "<td>" . $e->getName() . "</td>"
            . "<td>" . $e->getEmpProject()->getProject() . "</td>"
            . "<td><button><a href='del.php?edelete={$e->getId()}'>DELETE</a></button>"
            . "<button><a href='?eupdatable={$e->getId()}'>UPDATE</a></button></td>"
            . "</tr>");
    print("</table>"); 
?>
    <button><a href="addEmp">Add New Employee</a></button></td>
</body>

</html>