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

        <div class="container mt-3">
            <a href="{{route('client.create')}}" class="btn btn-primary">Adaugare client</a>
        </div>
        <div class="container mt-3">
            <h2>Lista clientilor</h2>
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
                        <th>Status</th>
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
                        <td>{{ $client->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </x-app-layout>
</body>

</html>