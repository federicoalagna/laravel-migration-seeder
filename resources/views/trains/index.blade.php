<!DOCTYPE html>
<html>

<head>
    <title>laravel-migration-seeder</title>
</head>

<body>
    <h1>Treni in Partenza</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                {{ $train->azienda }} -
                Da: {{ $train->stazione_partenza }} -
                A: {{ $train->stazione_arrivo }} -
                Partenza: {{ $train->orario_partenza }} -
                Arrivo: {{ $train->orario_arrivo }} -
                Codice Treno: {{ $train->codice_treno }} -
                Numero Carrozze: {{ $train->numero_carrozze }} -
                In Orario: {{ $train->in_orario ? 'Sì' : 'No' }} -
                Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}
            </li>
        @endforeach
    </ul>
</body>

</html>
