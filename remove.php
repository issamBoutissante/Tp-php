<?php
    require("./components/connection.php");
    $id = $_GET["id"];
    if(empty($id)){
           header("Location:index.php"); 
           exit();
    }
    $query=$conn->prepare("delete from etudiants where id='$id'");
    $query->execute();
    header("Location:index.php"); 
?>