<?php

//var_dump($_GET);

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

$filtered_hotels = $hotels;

//ricerca

$has_parking = !empty($_GET['has-parking']);

//Ricerca per parcheggio
if ($has_parking) {

    $temp_hotels = [];

    foreach ($filtered_hotels as $hotel) {
        if ($hotel['parking'] === true) {
            $temp_hotels[] = $hotel;
            //array_push($temp_hotels, $hotel);
        }
    }

    $filtered_hotels = $temp_hotels;

    //echo 'faccio la ricerca per parcheggio';
}

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
        <!--- lista hotel --->
        <div class="container p-3">

            <section id="hotel-search">
                <form action="index.php" method="GET">
                    <div class="row align-items-center">

                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="has-parking" name="has-parking" value="1" <?php if ($has_parking) : ?> checked <?php endif; ?>>
                                <label class="form-check-label" for="has-parking">
                                    Solo hotels con parcheggio
                                </label>
                            </div>
                        </div>
                        <!---

                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                    ---->
                        <div class="col">
                            <button class="btn btn-primary btn-sm">
                                Search
                            </button>
                        </div>

                </form>

        </div>
        </section>

        <hr>
        <section id="hotel-list">
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
                    <?php foreach ($filtered_hotels as $hotel) : ?>
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
        </section>
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