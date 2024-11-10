<!DOCTYPE html>
<html>
    <head>
        <title>E-Commerce</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="icon" href="https://amineekilani.github.io/portfolio/Photo.png">
    </head>
    <body>
        <?php
            include "nav.php";
        ?>
        <div class="container mt-3">
            <h1>Liste des Produits</h1>
            <div class="row">
                <?php
                    for($i=0; $i<9; $i++)
                    {
                ?>
                <div class="col-3 mt-3">
                    <div class="card">
                        <img src="https://picsum.photos/400/200" class="img-fluid" alt="Photo du produit">
                        <div class="card-body">
                            <h1 class="card-title">Asus I7 1To</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, voluptate.</p>
                            <a href="#" class="btn btn-primary btn-sm">Détail</a>
                            <a href="#" class="btn btn-success btn-sm"><i class="bi bi-cart-plus"></i> Ajouter</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <?php
                include "footer.php";
            ?>
        </div>
    </body>
</html>