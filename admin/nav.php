<?php

if (isset($_POST['bt'])){
    $ref = $_POST['ref'];
    header ("Location: details.php?ref=$ref");
}
?>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Islem Immobiliére</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="add.php">Add a proprety</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="all.php">Proprety List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-sign-out"></i>Disconnect</a>
                </li>

            </ul>
            <form class="d-flex"method="post">
                <input class="form-control me-sm-2" type="search" placeholder="Search" name="ref">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="bt">Search</button>
            </form>
        </div>
    </div>
</nav>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">




