<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
    <a href="emp">Employees</a>
    <a href="proj">Project</a>
</header>

<?php
include_once 'bootstrap.php';

$proj = $entityManager->getRepository('Models\Project')->findAll();
print("<table>
<tr>
<th>ID</th>
<th>Project</th>
<th>Employee</th>
<th>Actions</th>
</tr>");
    foreach ($proj as $p) {
    $empName = ''; 
    foreach ($p->getEmployeesData()as $e) {
        $empName.= $e->getName() . ' ';}
        print("<tr>"
            . "<td>" . $p->getId()  . "</td>"
            . "<td>" . $p->getProject() . "</td>"
            . "<td>" . $empName . "</td>"
            . "<td><button><a href='del.php?pdelete={$p->getId()}'>DELETE</a></button>"
            . "<button><a href='updateProj.php?pupdate={$p->getId()}'>UPDATE</a></button></td>"
            . "</tr>");
    }
    print("</table>"); 
?>
<button class="addbutton"><a href="addproj">Create Project</a></button></td>
</body>
</html>