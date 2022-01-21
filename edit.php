<?php
    require("./components/connection.php");
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    if(empty($nom) || empty($prenom||empty($age))){
           header("Location:createForm.php"); 
           exit();
    }
    $query=$conn->prepare("update etudiants set nom='$nom',prenom='$prenom',age='$age' where id='$id'");
    $query->execute();
    header("Location:index.php"); 
?>