<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center my-5">Partenze</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Azienda</th>
                                <th>Stazione di Partenza</th>
                                <th>Stazione di Arrivo</th>
                                <th>Orario di Partenza</th>
                                <th>Orario di Arrivo</th>
                                <th>Codice Vettore</th>
                                <th>Numero Carrozze</th>
                                <th>In Orario</th>
                                <th>Cancellato</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trains as $train)
                                <tr>
                                    <td>{{ $train->id }}</td>
                                    <td>{{ $train->azienda }}</td>
                                    <td>{{ $train->stazione_di_partenza }}</td>
                                    <td>{{ $train->stazione_di_arrivo }}</td>
                                    <td>{{ $train->orario_di_partenza }}</td>
                                    <td>{{ $train->orario_di_arrivo }}</td>
                                    <td>{{ $train->codice_treno }}</td>
                                    <td>{{ $train->numero_carrozze }}</td>
                                    <td>{{ $train->in_orario ? 'Si' : 'No' }}</td>
                                    <td>{{ $train->cancellato ? 'Si' : 'No' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
