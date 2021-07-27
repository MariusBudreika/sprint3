<?php
namespace Models;
include_once 'bootstrap.php';

if(isset($_GET['edelete'])){
    $emp = $entityManager->find('Models\Employee', $_GET['edelete']);
    $entityManager->remove($emp);
    $entityManager->flush();
    header("Location: emp");
}

if(isset($_GET['pdelete'])){
    $proj = $entityManager->find('Models\Project', $_GET['pdelete']);
    $entityManager->remove($proj);
    $entityManager->flush();
    header("Location: proj");
}