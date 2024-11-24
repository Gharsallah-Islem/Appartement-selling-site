<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Gestion des Biens Immobiliers</title>
</head>

<body>
    <?php
    include "nav.php";
    ?>

    <div class="container mt-3">
        <h1>Liste des Immobilier</h1>
        <div class="row">
            <?php
            for ($i = 0; $i < 12; $i++) {
            ?>

                <div class="col-3">
                    <div class="card">
                        <img src="https://a0.muscache.com/im/pictures/054a8ad5-709c-4010-a165-e1eaccea047b.jpg?im_w=720" class="img-fluid" alt="la photo du produit">
                        <div class="card-body">
                            <h1 class="card-title">Hammamet, Tunisia</h1>
                            <p class="card-text">6 guests2 bedrooms5 beds1 bath<br>Small Moorish house located in an oasis of calm.
                                A hundred meters away on foot is the sea and a huge sandy beach</p>
                            <a href="#" class="btn btn-success btn-sm">Details</a>
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fa-address-book"></i> Contacts</a>
                        </div>


                    </div>
                </div>
            <?php } ?>
        </div>
        <?php
        include "footer.php";
        ?>
    </div>


</body>

</html>