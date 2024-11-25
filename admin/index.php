<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "nav.php"; ?>
    <div class="container mt-3">

        <h1>Appartements List</h1>
        <div class="container">
            <div class="row">
                <!-- Résumé rapide -->
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Total Properties</h5>
                            <p class="card-text fs-1">125</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Available Apartments</h5>
                            <p class="card-text fs-1">75</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Villas Listed</h5>
                            <p class="card-text fs-1">50</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            Liste des propriétés les plus demandés
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Référence</th>
                                        <th>Propriétaire</th>
                                        <th>Type</th>
                                        <th>Localité</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>IM-001</td>
                                        <td>Mohamed Ben Ahmed</td>
                                        <td>Appartement</td>
                                        <td>Tunis</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>IM-002</td>
                                        <td>Khadija Abidli</td>
                                        <td>Villa</td>
                                        <td>Sousse</td>
                                        <td><span class="badge bg-warning">En attente</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>IM-003</td>
                                        <td>Ali Hajji</td>
                                        <td>Appartement</td>
                                        <td>Monastir</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>IM-004</td>
                                        <td>Fatma Zahra Akroud</td>
                                        <td>Villa</td>
                                        <td>Sfax</td>
                                        <td><span class="badge bg-danger">Indisponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>IM-005</td>
                                        <td>Youssef Derghouthi</td>
                                        <td>Appartement</td>
                                        <td>Gabès</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>IM-006</td>
                                        <td>Houda Fitouri</td>
                                        <td>Villa</td>
                                        <td>Nabeul</td>
                                        <td><span class="badge bg-warning">En attente</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>IM-007</td>
                                        <td>Mohamed Trabelsi</td>
                                        <td>Appartement</td>
                                        <td>Bizerte</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>IM-008</td>
                                        <td>Zainab Gharbi</td>
                                        <td>Villa</td>
                                        <td>Ariana</td>
                                        <td><span class="badge bg-danger">Indisponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>IM-009</td>
                                        <td>Hamza Bouchnak</td>
                                        <td>Appartement</td>
                                        <td>Béja</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>IM-010</td>
                                        <td>Aisha Mezni</td>
                                        <td>Villa</td>
                                        <td>Mahdia</td>
                                        <td><span class="badge bg-warning">En attente</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>IM-011</td>
                                        <td>Salem Hammami</td>
                                        <td>Maison</td>
                                        <td>Tataouine</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>IM-012</td>
                                        <td>Noura Maaloul</td>
                                        <td>Appartement</td>
                                        <td>Tozeur</td>
                                        <td><span class="badge bg-warning">En attente</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>IM-013</td>
                                        <td>Fares Chouchene</td>
                                        <td>Villa</td>
                                        <td>Gafsa</td>
                                        <td><span class="badge bg-danger">Indisponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>IM-014</td>
                                        <td>Lamia Selmi</td>
                                        <td>Maison</td>
                                        <td>Kairouan</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>IM-015</td>
                                        <td>Houssem Jelassi</td>
                                        <td>Appartement</td>
                                        <td>Zaghouan</td>
                                        <td><span class="badge bg-warning">En attente</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>IM-016</td>
                                        <td>Rim Bouazizi</td>
                                        <td>Villa</td>
                                        <td>Manouba</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>IM-017</td>
                                        <td>Adel Mabrouk</td>
                                        <td>Maison</td>
                                        <td>Jendouba</td>
                                        <td><span class="badge bg-danger">Indisponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>IM-018</td>
                                        <td>Sara Karray</td>
                                        <td>Appartement</td>
                                        <td>Kebili</td>
                                        <td><span class="badge bg-warning">En attente</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>IM-019</td>
                                        <td>Karim Ben Salem</td>
                                        <td>Villa</td>
                                        <td>Medenine</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>IM-020</td>
                                        <td>Amira Hajri</td>
                                        <td>Maison</td>
                                        <td>Sidi Bouzid</td>
                                        <td><span class="badge bg-danger">Indisponible</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Modifier</button>
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>