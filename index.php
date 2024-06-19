<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-hotels</title>
</head>

<body>
    <header>
        <div class="container text-center p-3">
            <h1>
                Hotels
            </h1>
        </div>
    </header>
    <main>
        <div class="container-fluid text-center p-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Parcheggio</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Distanza</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $hotel) : ?>
                        <tr>
                            <td>
                                <?php echo $hotel['name']; ?>
                            </td>
                            <td>
                                <?php echo $hotel['description']; ?>
                            </td>
                            <td>
                                <?php echo $hotel['parking']; ?>
                            </td>
                            <td>
                                <?php echo $hotel['vote']; ?>
                            </td>
                            <td>
                                <?php echo $hotel['distance_to_center']; ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>


    </main>
    <footer>
        <div class="container text-center p-3">
            <h2>
                Hotel made by Christian J
            </h2>
        </div>
    </footer>

</body>

</html>