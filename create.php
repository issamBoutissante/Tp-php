<?php
    require("./components/connection.php");
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    if(empty($nom) || empty($prenom||empty($age))){
           header("Location:createForm.php"); 
           exit();
    }
    $query=$conn->prepare("Insert into etudiants(nom,prenom,age) values('$nom','$prenom','$age')");
    $query->execute();
    header("Location:index.php"); 
?>