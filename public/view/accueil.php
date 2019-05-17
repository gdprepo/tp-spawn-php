<ul class="list-group">
    <?php 
        session_start();

        $index = rand(0, count($data["spawn"])-1);
        while ($index == $_SESSION["newsession"]) {
            $index = rand(0, count($data["spawn"])-1);
        }
        $_SESSION["newsession"]=$index;
        $array = $data["spawn"][$index];
    ?>

    <div>
        <button id="demo" onclick="javascript:window.location.reload()" type="button" class="btn btn-dark btn-admin">Lancer le generateur de SPAWN</button>
    </div>
    <li class="">
        <div class="card" style="margin:10px; padding:5px;">
            <h5 class="card-header"><?php echo $array["id"];?> - <?php echo $array["name"]; ?></h5>
            <div class="card-body">
                <img class="img-fluid" src="<?php echo $array["picture_url"] ?>" style="height:250px;margin-left:1%;margin-right:auto;"><img>
            </div>
        </div>
    </li>
    <li class="admin-mode <?php echo "form-projet-row-" . $array["id"] ?>">
        <div class="card-body">
            <form action="/editProjet.php" method="post" class="form-inline">
                <input type="hidden" name="id" value= <?php echo $array["id"]?> />
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <input placeholder="Titre" type="text" name="name" value="<?php echo $array["name"]; ?>">
                        </div>
                        <div class="col-md-2">
                            <input placeholder="Lien Image" type="text" name="picture_url" value="<?php echo $array["picture_url"]; ?>">
                        <div class="col-md-2">
                            <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger" type="button" value="Cancel" onclick="toogleProjetForm(<?php echo  $array['id'] ?>)">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </li>
    <div class="card admin-mode" style="margin:10px; padding:5px;">
        <li class="list-group-item">
            <form action="/addProjet.php" method="post" class="form-inline">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <input placeholder="Titre" type="text" name="name">
                        </div>
                        <div class="col-md-2">
                            <input placeholder="Picture" type="text" name="picture_url">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
    </div>
</ul>
<script>
    function toogleProjetForm(id) {
        $('.projet-row-' + id).toggle();
        $('.form-projet-row-' + id).toggle();
    }
    function randBdd(array) {
        $array = $data["spawn"][rand(0, count($data["spawn"])-1)]
    }
</script>
