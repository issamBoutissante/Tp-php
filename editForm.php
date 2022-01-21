<?php
require("./components/connection.php");
require("./components/header.php");
$id = $_GET["id"];
if(empty($id)){
        header("Location:index.php"); 
        exit();
}
$query = $conn->prepare("SELECT * FROM etudiants where id='$id'");
$query->execute();
$etudiant = $query->fetch();

?>
<div class="container">
    <form class="container" method="post" action="edit.php">
         <div class="mb-3">
            <label for="id" class="form-label">id</label>
            <input type="text" class="form-control" name="id" required value="<?php echo $etudiant[0]?>">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">nom</label>
            <input type="text" class="form-control" name="nom" required value="<?php echo $etudiant[1]?>">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">prenom</label>
            <input type="text" class="form-control" name="prenom" required  value="<?php echo $etudiant[2]?>">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">age</label>
            <input type="number" class="form-control" name="age" required value="<?php echo $etudiant[3]?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Edit"/>
        <a class="btn btn-danger" href="index.php">Cancel</a>
    </form>
</div>