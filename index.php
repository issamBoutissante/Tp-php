<?php
require("./components/connection.php");
require("./components/header.php")
?>
<div class="container">
    <div class="input-group">
        <h1 class="col-9">Liste Des Etudiants</h1>
        <a class="btn btn-primary col-3">Add</a>
    </div>
    <table class="table table-hover">
        <thead>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>age</th>
            <thead></th>
        </thead>
        <tbody>
            <?php
                $query = $conn->prepare("SELECT * FROM etudiants");
                $query->execute();
                $etudiants = $query->fetchAll();
                foreach($etudiants as $etudiant){
                    echo "
                    <tr>
                        <td>$etudiant[0]</td>
                        <td>$etudiant[1]</td>
                        <td>$etudiant[2]</td>
                        <td>$etudiant[3]</td>
                    ";
                    ?>
                     <td>
                            <a class='btn btn-success' href='editForm.php?id=<?php echo $etudiant[0]?>'>Edit</a>
                            <a class='btn btn-danger' href='remove.php?id=<?php echo $etudiant[0]?>' onclick="return confirm('sure ???')">Remove</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>