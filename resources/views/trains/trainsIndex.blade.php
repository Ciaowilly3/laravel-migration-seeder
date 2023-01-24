<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trains</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="css/style.css"> -->
    </head>
    <body class="bg-dark">
        <div class="container">
            <h1 class="text-center text-primary mb-5">Train(ing)s</h1>
            <h4>I treni in partenza oggi sono:</h4>
            <div class="d-flex justify-content-between bg-white rounded-3 flex-wrap">
                @foreach ($todayTrains as $train)
                    <ul class="col-4">
                        <li><h6> codice: {{ $train->codice_treno }}</h6>
                            <ul>
                                <li>Azienda: {{$train->nome_azienda}}</li>
                                <li>Stazione di partenza: {{$train->stazione_di_partenza}}</li>
                                <li>Destinazione: {{$train->destinazione}}</li>
                                <li>Orario di partenza previsto: {{($train->orario_di_partenza)}}</li>
                                <li>Orario di arrivo previsto: {{$train->orario_di_arrivo}}</li>
                                <li>Numero di carrozze: {{$train->numero_carrozze}}</li>
                            </ul>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </body>
</html>