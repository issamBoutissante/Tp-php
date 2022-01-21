<?php
require("./components/header.php")
?>
<div class="container">
    <form class="container" method="post" action="create.php">
        <div class="mb-3">
            <label for="nom" class="form-label">nom</label>
            <input type="text" class="form-control" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">prenom</label>
            <input type="text" class="form-control" name="prenom" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">age</label>
            <input type="number" class="form-control" name="age" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Add"/>
        <a class="btn btn-danger" href="index.php">Cancel</a>
    </form>
</div>