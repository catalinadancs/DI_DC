<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clienti</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>

<body>
    <x-app-layout>
        <style>
            @media (prefers-color-scheme: dark) {


                th,
                td {
                    color: #fff !important;
                    /* Set the text color */
                    background-color: #1f2937 !important;
                    border-color: #777 !important;
                }

                h2 {
                    color: #fff !important;
                    /* Set the text color */

                    border-color: #777 !important;
                }


            }

            @media (prefers-color-scheme: light) {}
        </style>

        <div class="container">

            <a href="{{ url('bazadate') }}" class="btn btn-secondary">Back</a>

            <a href="{{route('client.create')}}" class="btn btn-primary">Adaugare client - PFA</a>
            <a href="{{route('firma.create')}}" class="btn btn-primary">Adaugare client - SRL</a>
        </div>
        <div class="container mt-3">
            <h2>Lista clientilor PFA</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nume Prenume </th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Seria buletinului</th>
                        <th>Numarul buletinului</th>
                        <th>CNP</th>
                        <th>Adresa</th>
                        <th>Banca</th>
                        <th>IBAN</th>
                        <!-- Adăugați mai multe coloane aici, dacă este necesar -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->nume }} {{ $client->prenume }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->telefon }}</td>
                        <td>{{ $client->serieCI }}</td>
                        <td>{{ $client->numarCI }}</td>
                        <td>{{ $client->cnp }}</td>
                        <td>{{ $client->adresa }}</td>
                        <td>{{ $client->banca }}</td>
                        <td>{{ $client->iban }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--  -->
    </x-app-layout>
</body>

</html>